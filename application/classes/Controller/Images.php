<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Images extends Controller
{


    function action_index()
    {

    }


    function action_icon()
    {

        $id = Request::current()->param('id', 0);
        if (is_numeric($id) && $id == 0) return;
        $file = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'icon.png';
        if (file_exists($file))
            Response::factory()->send_file($file, 'icon-' . $id . '.png');
        else {
            // FIXME: add check for file attack
        }
    }

    function action_iconnew()
    {

        $id = Request::current()->param('id', 0);
        if (is_numeric($id) && $id == 0) return;
        $file = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'icon_new.png';
        if (file_exists($file))
            Response::factory()->send_file($file, 'icon-' . $id . '.png');
        else {
            $file = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'icon.png';
            if (file_exists($file))
                Response::factory()->send_file($file, 'icon-' . $id . '.png');
            else {
                // FIXME: add check for file attack
            }
        }
    }

    function action_list()
    {


        $id = Request::current()->param('id', 0);
        if (is_numeric($id) && $id == 0) return;
        $file = Request::current()->param('file', '../noimage');
        $format = Request::current()->param('format', 'png');

        $file_name = $file . '.' . $format;

        $file = PATH_TO_REVIEW_IMAGES . $id . DIRECTORY_SEPARATOR . 'img/' . $file_name;
        if (file_exists($file))
            Response::factory()->send_file($file, 'icon-' . $id . '.' . $format);
        else {
            // FIXME: add check for file attack
        }


    }

    function action_upload()
    {
        $directory = "reviews/temp/";
        $files = $_FILES[Model_Review::TEMP_FILE_NAME];

        if (!empty($files)) {
            $uploaded = array();

            //	This is for custom errors;
            /*	$custom_error= array();
                $custom_error['jquery-upload-file-error']="File already exists";
                echo json_encode($custom_error);
                die();
            */
            $error = $files["error"];
            //You need to handle  both cases
            //If Any browser does not support serializing of multiple files using FormData()
            if (!is_array($files["name"])) //single file
            {
                $fileName = $files["name"];
                move_uploaded_file($files["tmp_name"], $directory . $fileName);
                $uploaded[] = $fileName;
            } else //Multiple files, file[]
            {
                $fileCount = count($files["name"]);
                for ($i = 0; $i < $fileCount; $i++) {
                    $fileName = $files["name"][$i];
                    move_uploaded_file($files["tmp_name"][$i], $directory . $fileName);
                    $uploaded[] = $fileName;
                }

            }
            echo json_encode($uploaded);
        }

    }

}