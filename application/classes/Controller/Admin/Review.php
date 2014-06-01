<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Review extends Controller_Admin_Common
{

    public function action_index()
    {
        $review_list = ORM::factory("Review")->order_by('date_post', 'desc')->find_all();

        $this->template->content = View::factory("{$this->folder}/{$this->layout}/revs", array(
            'review_list' => $review_list,
        ));
    }


    public function action_edit()
    {
        $this->template->css['/assets/css/datepicker.css'] = 'screen';
        $this->template->js[] = '/assets/js/bootstrap-datepicker.js';
        $this->template->js[] = '/media/js/jquery.ocupload-1.1.2.packed.js';
        //jquery.ocupload.pathced.js

        $id = Request::current()->param('id', 0);

        if ($id > 0) $rev = ORM::factory('Review', $id);
        else {
            $rev = ORM::factory('Review');
            $rev->date_post = time();
            $rev->id = $id;
            //create tmp folder for files upload
            mkdir(PATH_TO_REVIEW_IMAGES . $rev->id);
            mkdir(PATH_TO_REVIEW_IMAGES . $rev->id . DIRECTORY_SEPARATOR . 'img');
        }


        $cat_list_ios = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::iOS);
        $cat_list_andr = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::Android);
        $cat_list_bb = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::BlackBerry);
        $cat_list_win = array(0 => 'N/A') + ORM::factory('Category')->listSelect(Filter_Platforms::Windows);

        $cat_sel_ios = $rev->categories->and_where('platform', '&', Filter_Platforms::iOS)->order_by('name')->find_all()->as_array('id', 'id');
        if (empty($cat_sel_ios)) $cat_sel_ios = 0;

        $cat_sel_andr = $rev->categories->and_where('platform', '&', Filter_Platforms::Android)->order_by('name')->find_all()->as_array('id', 'id');
        if (empty($cat_sel_andr)) $cat_sel_andr = 0;

        $cat_sel_bb = $rev->categories->and_where('platform', '&', Filter_Platforms::BlackBerry)->order_by('name')->find_all()->as_array('id', 'id');
        if (empty($cat_sel_bb)) $cat_sel_bb = 0;

        $cat_sel_win = $rev->categories->and_where('platform', '&', Filter_Platforms::Windows)->order_by('name')->find_all()->as_array('id', 'id');
        if (empty($cat_sel_win)) $cat_sel_win = 0;

        $images = array();
        if ($id > 0) {
            $directory = PATH_TO_REVIEW_IMAGES . $rev->id . '/img/'; //'/system/infomation/';
            $d = dir($directory);
            while (false !== ($entry = $d->read())) {
                if ($entry != '.' && $entry != '..') {
                    $images[] = 'images/list/' . $rev->id . '/' . $entry;
                }
            }
            $d->close();
        }
        $images_block = View::factory("{$this->folder}/{$this->layout}/img_edit", array("images" => $images, 'rev_id' => $rev->id));

        $this->template->content .= View::factory("{$this->folder}/{$this->layout}/rev_edit", array(
            'review' => $rev,
            'images_block' => $images_block,
            'cat_list_ios' => $cat_list_ios, 'cat_sel_ios' => $cat_sel_ios,
            'cat_list_andr' => $cat_list_andr, 'cat_sel_andr' => $cat_sel_andr,
            'cat_list_bb' => $cat_list_bb, 'cat_sel_bb' => $cat_sel_bb,
            'cat_list_win' => $cat_list_win, 'cat_sel_win' => $cat_sel_win,
        ));

    }


    public function action_update()
    {

        Database::$default = "admin";

        $id = Request::current()->param('id', 0);

        if (is_numeric($id) && $id > 0) $rev = ORM::factory('Review', $id);
        else    $rev = ORM::factory('Review');

        $rev->name = Request::current()->post('rev_name');
        $rev->description = Request::current()->post('rev_desc');

        $rev->ref_ios = trim(Request::current()->post('rev_ref_ios'));
        $rev->ref_andr = trim(Request::current()->post('rev_ref_andr'));
        $rev->ref_bb = trim(Request::current()->post('rev_ref_bb'));
        $rev->ref_win = trim(Request::current()->post('rev_ref_win'));

        $rev->platforms =
            ($rev->ref_ios != '') * Filter_Platforms::iOS +
            ($rev->ref_andr != '') * Filter_Platforms::Android +
            ($rev->ref_bb != '') * Filter_Platforms::BlackBerry +
            ($rev->ref_win != '') * Filter_Platforms::Windows;

        $rev->tube_link = trim(Request::current()->post('rev_tube_link'));
        $rev->meow_link = trim(Request::current()->post('rev_meow_link'));

        $date = Request::current()->post('rev_date_post');
        if ($date != '') {
            list($d, $m, $y) = explode('/', $date);
            $time = mktime(date("H"), date("i"), date("s"), $m, $d, $y);
            if (date("d/m/Y", $time) != date("d/m/Y", $rev->date_post))
                $rev->date_post = $time;
            //update only if d/m/Y changed
        }

        $rev->vip = (int)Request::current()->post('rev_vip');
        $rev->rating = Request::current()->post('rev_rating');
        $rev->price = Request::current()->post('rev_price');
        $rev->favorite = (int)Request::current()->post('rev_favorite');

        $rev->save();
        //add categories - need id

        $sel_cats = array();
        if ($rev->platforms & Filter_Platforms::iOS)
            $sel_cats = array_merge($sel_cats, Request::current()->post('rev_category_ios'));
        if ($rev->platforms & Filter_Platforms::Android)
            $sel_cats = array_merge($sel_cats, Request::current()->post('rev_category_andr'));
        if ($rev->platforms & Filter_Platforms::BlackBerry)
            $sel_cats = array_merge($sel_cats, Request::current()->post('rev_category_bb'));
        if ($rev->platforms & Filter_Platforms::Windows)
            $sel_cats = array_merge($sel_cats, Request::current()->post('rev_category_win'));


        $cur_cats = $rev->categories->find_all()->as_array('id', 'id');

        $cat_same = array_intersect($cur_cats, $sel_cats);
        $cat_add = array_diff($sel_cats, $cat_same);
        $cat_rem = array_diff($cur_cats, $cat_same);

        // debug info
        $this->template->content .= 'curent: ' . print_r($cur_cats, 1) . '<br>';
        $this->template->content .= 'selected: ' . print_r($sel_cats, 1) . '<br>';
        $this->template->content .= 'same: ' . print_r($cat_same, 1) . '<br>';
        $this->template->content .= 'add: ' . print_r($cat_add, 1) . '<br>';
        $this->template->content .= 'rem: ' . print_r($cat_rem, 1) . '<br>';


        if (!empty($cat_add))
            foreach ($cat_add as $cat_id)
                if ($cat_id > 0)
                    $rev->add('categories', $cat_id);

        if (!empty($cat_rem))
            foreach ($cat_rem as $cat_id)
                if ($cat_id > 0)
                    $rev->remove('categories', $cat_id);
        //update categories - rev_num
        Model_category::count_reviews($cat_add + $cat_rem);


        if (!$rev->loaded()) {
            $this->template->content .= 'not Saved!!';
            return;
        }
        // @FIXME: update cat rev num
        //update cat rev num
        //$cat = $rev->categories;
        //$cat->rev_num = $cat->reviews->count_all();
        //$cat->save();


        // files
        //mk dir
        //if tmp folder - rename
        if ($id != $rev->id) {
            rename(PATH_TO_REVIEW_IMAGES . $id, PATH_TO_REVIEW_IMAGES . $rev->id);
        }
        //fix icon if needed
        $new_icon = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'icon_new.png';
        if (file_exists($new_icon)) {
            $old_icon = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'icon.png';
            unlink($old_icon);
            rename($new_icon, $old_icon);
        }

        // reorder images
        $flist = Request::current()->post('rev_image_name');
        $this->template->content .= 'flist: ' . print_r($flist, 1);
        if (is_array($flist)) {
            $t = time();
            foreach ($flist as $i => $v) {
                $cf = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $v;
                $ext = pathinfo($cf, PATHINFO_EXTENSION);
                $nf = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'img' . $i . '_' . $t . '.' . $ext;
                $ok = rename($cf, $nf);
                $this->template->content .= ' rename: ' . (int)$ok .
                    ' ' . $cf . ' -> ' . $nf . '<br>';
            }
        }


        /* ajax added
        //rev_icon rev_image[]
        if(isset($_FILES['rev_icon']) ){
            $directory = PATH_TO_REVIEW_IMAGES.''.$rev->id.'/';
            if( !file_exists($directory) ) mkdir($directory);
            $icon = Upload::save($_FILES['rev_icon'], 'icon.png',  $directory);
        }



        if(isset($_FILES['rev_image']) && count($_FILES['rev_image']) > 0 ){
            $files = $_FILES['rev_image'];
            $directory = PATH_TO_REVIEW_IMAGES.$rev->id.'/img/';
            if( !file_exists($directory) ) mkdir($directory);
            foreach ( Arr::rotate($_FILES['rev_image']) as $i => $file)
                $file = Upload::save($file, 'img'.$i.'.jpg',  $directory);
        }
        */


        $this->template->content .= __('Saved') . '
			3 sec redirect back or <a href="#" onclick="backme()">back now</a>
			<script language="javascript">
			function backme() { parent.location.href="/admin/review/"; }
			setTimeout( backme, 3000);						
			</script>
		';


    }

    public function action_count()
    {
        $cat_id = Request::current()->param('id', 0);

        $total_items = ORM::factory("Review")
            ->where('category_id', '=', $cat_id)
            ->count_all();

        $this->template->content .= $total_items;
    }

    public function action_iconupload()
    {
        $this->template->content_only = true;
        $id = Request::current()->param('id', 0);
        if (is_numeric($id) && $id == 0) {
            $this->template->content .= "ERROR: id == $id";
            return;
        }
        $uploaddir = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR;
        $fname = 'icon_new.png';
        $uploadfile = $uploaddir . $fname;

        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK && $ok = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            $this->template->content .= "OK. File is valid, and was successfully uploaded.  FILE:[$fname] \n";
        } else {
            switch ($_FILES["file"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    $message = "The uploaded file exceeds the upload max filesize";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $message = "The uploaded file exceeds the max filesize for the form";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $message = "The uploaded file was only partially uploaded";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $message = "No file was uploaded";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $message = "Missing a temporary folder";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $message = "Failed to write file to disk";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $message = "File upload stopped by extension";
                    break;
                default:
                    $message = "Unknown upload error: " . $_FILES["file"]["error"] . ' move:' . $ok;
            }
            $this->template->content .= $message;
        }

    }

    public function action_icondel()
    {
        $id = Request::current()->param('id', 0);
        if (is_numeric($id) && $id == 0) {
            $this->template->content .= "ERROR: id == $id";
            return;
        }
        $file = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'icon_new.png';

        if (!file_exists($file)) {
            $this->template->content .= "ERROR: No file exists";
            return;
        }

        $ok = unlink($file);
        if ($ok)
            $this->template->content .= "OK";
        else
            $this->template->content .= "ERROR: Can`t delete file";
    }

    public function action_imgdel()
    {
        $id = Request::current()->param('id', 0);
        $fanme = trim(Request::current()->query('file'));
        if (is_numeric($id) && $id == 0) {
            $this->template->content .= "ERROR: id == $id";
            return;
        }
        if ($fanme == '') {
            $this->template->content .= "ERROR: No file name";
            return;
        }
        $file = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $fanme;

        if (!file_exists($file)) {
            $this->template->content .= "ERROR: No file exists";
            return;
        }

        $ok = unlink($file);
        if ($ok)
            $this->template->content .= "OK";
        else
            $this->template->content .= "ERROR: Can`t delete file";
    }

    public function action_imgupload()
    {
        $this->template->content_only = true;

        $id = Request::current()->param('id', 0);

        if (is_numeric($id) && $id == 0) {
            $this->template->content .= "ERROR: id == $id";
            return;
        }


        $uploaddir = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR;
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $fname = 'zfile_' . md5(time() . rand(1, 1000)) . '.' . $ext;
        $uploadfile = $uploaddir . $fname;

        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK && $ok = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
            $this->template->content .= "OK. File is valid, and was successfully uploaded.  FILE:[$fname] \n";
        } else {
            switch ($_FILES["file"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    $message = "The uploaded file exceeds the upload max filesize";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $message = "The uploaded file exceeds the max filesize for the form";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $message = "The uploaded file was only partially uploaded";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $message = "No file was uploaded";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $message = "Missing a temporary folder";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $message = "Failed to write file to disk";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $message = "File upload stopped by extension";
                    break;
                default:
                    $message = "Unknown upload error: " . $_FILES["file"]["error"] . ' move:' . $ok;
            }
            $this->template->content .= $message;
        }
    }

    public function action_add()
    {
        $this->template->content = "adminko";
    }

}	