<?php if ( ! defined('PATH_CORE')) die ('Bad requested!');

class KL_Model_Loader
{
    public function load($model)
    {
        $model = ucfirst($model) . '_Model';
        if (!file_exists(PATH_MVC . '/model/' . $model . '.php')){
            die ('Không tìm thấy model');
        }
        require_once(PATH_MVC . '/model/' . $model . '.php');
    }
}