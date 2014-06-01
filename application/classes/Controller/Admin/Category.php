<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Category extends Controller_Admin_Common
{

    public function action_index()
    {
        $category_list = ORM::factory('Category')->tree();

        $this->template->content = View::factory("{$this->folder}/{$this->layout}/cats", array(
            'cat_list' => $category_list,
        ));
    }

    public function action_edit()
    {
        $id = Request::current()->param('id', 0);

        if ($id > 0) {
            $category = ORM::factory('Category', $id);
        } else {
            $category = ORM::factory('Category');
        }


        $cat_list_ios = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::iOS);
        $cat_list_andr = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::Android);
        $cat_list_bb = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::BlackBerry);
        $cat_list_win = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::Windows);

        $this->template->content .= View::factory("{$this->folder}/{$this->layout}/cat_edit", array(
            'category' => $category,
            'cat_list_ios' => $cat_list_ios,
            'cat_list_andr' => $cat_list_andr,
            'cat_list_bb' => $cat_list_bb,
            'cat_list_win' => $cat_list_win,
        ));

    }

    public function action_update()
    {
        $id = Request::current()->param('id', 0);

        if ($id > 0) $cat = ORM::factory('Category', $id);
        else    $cat = ORM::factory('Category');

        $cat->name = Request::current()->post('cat_name');
        $cat->description = Request::current()->post('cat_desc');
        $cat->platform = Request::current()->post('cat_platform');
        switch ($cat->platform) {
            case Filter_Platforms::iOS:
                $cat->parent_id = Request::current()->post('cat_parent_ios');
                break;
            case Filter_Platforms::Android:
                $cat->parent_id = Request::current()->post('cat_parent_andr');
                break;
            case Filter_Platforms::BlackBerry:
                $cat->parent_id = Request::current()->post('cat_parent_bb');
                break;
            case Filter_Platforms::Windows:
                $cat->parent_id = Request::current()->post('cat_parent_win');
                break;
            default:
                ;
        }


        $cat->save();

        if ($cat->loaded()) {
            $this->template->content .= __('Saved') . '
			<script language="javascript">
			parent.location.href="/admin/category/"
			</script>
			';
        } else {
            $this->template->content .= 'not Saved!!';
        }
    }

    public function action_delete()
    {
        $id = Request::current()->param('id', 0);

        if ($id == 0) {
            $this->template->content = 'ERROR: no cat with id ' . $id . ' found.';
            return;
        }

        $cat = ORM::factory('Category', $id);
        //has childs
        $chi_num = $cat->childs->count_all();
        //has reviews
        $rev_num = $cat->reviews->count_all();
        if ($chi_num == 0 && $rev_num == 0) { //
            $cat->delete();
            $this->template->content = 'OK';
            return;
        }

        $this->template->content = 'ERROR: category has childs (' . $chi_num . ') or reviews (' . $rev_num . ')';
    }

}	
