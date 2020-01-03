<?php if ( ! defined('PATH_CORE')) die ('Bad requested!');

class Base_Controller extends KL_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function load_header($string = 'blocks/header')
    {
        // Load view
        $data['title'] = 'page title';
        $this->view->load($string, $data);
    }

    public function load_footer($string = 'blocks/footer')
    {
        // Load view
        $this->view->load($string);
    }

    // Hàm hủy này có nhiệm vụ show nội dung của view, lúc này các controller
    // không cần gọi đến $this->view->show nữa
    public function __destruct()
    {
        $this->view->show();
    }
}