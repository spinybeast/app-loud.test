<?php defined('SYSPATH') or die('No direct script access.');

class Model_Category extends ORM
{
    protected $_has_many = array( // foreign_key - field name this SN(pk) in that table
        'childs' => array(
            'model' => 'Category',
            'foreign_key' => 'parent_id',
        ),
        'reviews' => array(
            'model' => 'Review',
            'through' => 'reviews_categories',
        ),
    );

    // N task - 1 project, manager(user), worker(user), parent(worker)
    protected $_belongs_to = array( // foreign_key - field name this table on that SN(pk)
        'parent' => array(
            'model' => 'Category',
            'foreign_key' => 'parent_id',
        ),
    );

    static function count_reviews($cat_ids)
    {
        if (!empty($cat_ids)) {
            foreach ($cat_ids as $cat_id) {
                $cat = ORM::factory('Category', $cat_id);
                $cat->rev_num = $cat->reviews->count_all();
                $cat->save();
            }
        }
    }

    public function tree($parent_id = 0)
    {
        if ($parent_id == 0 && $this->id > 0) {
            $parent_id = $this->id;
        }
        if ($parent_id)
            $list = $this->childs->and_where('platform', '&', $this->platform)->order_by('name')->find_all();
        else
            $list = $this->where('parent_id', '=', 0)->order_by('platform')->order_by('name')->find_all();

        $result = array();
        foreach ($list as $category) {
            $result[$category->id] = $category;
            $childs = $category->tree();
            $result = $result + $childs;
        }
        return $result;
    }

    public function listSelect($platform, $parent_id = 0)
    {
        if ($parent_id == 0 && $this->id > 0) {
            $parent_id = $this->id;
        }
        if ($parent_id){
            $list = $this->childs->and_where('platform', '&', $platform)->order_by('name')->find_all();
        }
        else{
            $list = $this->where('parent_id', '=', 0)->and_where('platform', '&', $platform)->order_by('name')->find_all();
        }

        $result = array();
        foreach ($list as $category) {
            $result[$category->id] = $category->name;
            $childs = $category->listSelect($platform, $parent_id);
            if (!empty($childs))
                $result = $result + array('-= ' . $category->name . ' =-' => $childs);
        }
        return $result;

    }

    public function getCloudForPlatform($platform)
    {
        return $this->where('platform', '&', $platform)->tree();
    }

    public function getReviews()
    {
        return $this->reviews->forDisplay();
    }


}	