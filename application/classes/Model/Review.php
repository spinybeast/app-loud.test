<?php defined('SYSPATH') or die('No direct script access.');

class Model_Review extends Model_Base
{
    const NEW_APPS = 'new';
    const FREE = 'free';
    const TOP = 'top';
    const OUR_FAVORITE = 'favorite';
    const REVIEWS_PER_PAGE = 15;
    const IMG_FOLDER = '/img/';
    const YOUTUBE_LINK = "http://www.youtube.com/embed/";
    const VIMEO_LINK = "http://player.vimeo.com/video/";
    const VIMEO_LINK_PARAMS = "?title=0&amp;byline=0&amp;portrait=0&amp;badge=0";
    const MAX_NAME_LENGTH = 23;
    const VERY_SHORT_DESCRIPTION_LENGTH = 125;
    const SHORT_DESCRIPTION_LENGTH = 150;
    const TEMP_FILE_NAME = 'file';

    protected $_has_many = array( // foreign_key - field name this SN(pk) in that table
        'categories' => array(
            'model' => 'Category',
            'through' => 'reviews_categories'
        ),

    );

    public static function getFilters()
    {
        return array(
            self::NEW_APPS,
            self::FREE,
            self::TOP,
            self::OUR_FAVORITE
        );
    }

    public function filterBy($filter)
    {
        if (!$this->checkFilter($filter)) {
            return $this->orderByVip();
        }
        if ($filter == self::NEW_APPS) {
            return $this->filterByNew(); //@TODO: make filter by new
        }
        if ($filter == self::FREE) {
            return $this->filterByFree();
        }
        if ($filter == self::OUR_FAVORITE) {
            return $this->filterByFavorite();
        }
        if ($filter == self::TOP) {
            return $this->filterByTop();
        }
    }

    function store_link($store = 0)
    {
        switch ($store) {
            case Filter_Platforms::iOS:
                return $this->ref_ios;
            case Filter_Platforms::Android:
                return $this->ref_andr;
            case Filter_Platforms::BlackBerry:
                return $this->ref_bb;
            case Filter_Platforms::Windows:
                return $this->ref_win;
        }
    }

    function store_badge()
    {
        $activePlatform = Filter_Platforms::getActive();

        switch ($activePlatform) {
            case Filter_Platforms::iOS:
                return HTML::anchor($this->ref_ios, HTML::image('/media/images/bages/appstore.png'), array("target" => "_blank"));
            case Filter_Platforms::Android:
                return HTML::anchor($this->ref_andr, HTML::image('/media/images/bages/gplay.png'), array("target" => "_blank"));
            case Filter_Platforms::BlackBerry:
                return HTML::anchor($this->ref_bb, HTML::image('/media/images/bages/bbstore.png'), array("target" => "_blank"));
            case Filter_Platforms::Windows:
                return HTML::anchor($this->ref_win, HTML::image('/media/images/bages/winstore.png'), array("target" => "_blank"));
        }
    }

    private function filterByFree()
    {
        return $this->and_where('price', '=', 0);
    }

    private function filterByFavorite()
    {
        return $this->and_where('favorite', '>', 0)->order_by('favorite', 'desc');
    }

    private function filterByTop()
    {
        return $this->limit(self::REVIEWS_PER_PAGE)->order_by('rating', 'desc');
    }

    private function filterByNew()
    {
        return $this;
    }

    private function checkFilter($filter)
    {
        return in_array($filter, self::getFilters());
    }

    private function orderByVip()
    {
        return $this->order_by('vip', 'desc');
    }

    public function forDisplay()
    {
        return $this->and_where('date_post', '>', 0)->order_by('date_post', 'desc');
    }

    public function forPlatform($platform)
    {
        return $this->where('platforms', '&', $platform)->forDisplay();
    }

    public function images()
    {
        $images = array();
        $directory = PATH_TO_REVIEW_IMAGES . $this->id . self::IMG_FOLDER;

        if (file_exists($directory)) {
            $imageDir = dir($directory);

            while ($image = $imageDir->read()) {
                if (Helper::isNotFake($image)) {
                    $images[] = 'images/list/' . $this->id . '/' . $image;
                }
            }
            $imageDir->close();
        }
        return $images;
    }

    public function vimeoLink()
    {
        return self::VIMEO_LINK . $this->meow_link . self::VIMEO_LINK_PARAMS;
    }

    public function youTubeLink()
    {
        return self::YOUTUBE_LINK . $this->tube_link;
    }

    public function cutDescription()
    {
        return Helper::trim_text($this->description, $this->getDescriptionLength());
    }

    private function getDescriptionLength()
    {
        if(strlen($this->name) >= self::MAX_NAME_LENGTH){
            return self::VERY_SHORT_DESCRIPTION_LENGTH;
        }

        return self::SHORT_DESCRIPTION_LENGTH;
    }
}