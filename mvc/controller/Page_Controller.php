<?php
if (!defined('PATH_CORE')) die('Bad requested!');

class Page_Controller extends Base_Controller
{
    public function indexAction()
    {
        $this->load_header();
        $this->view->load('pages/index');
        $this->load_footer();
    }

    public function gioi_thieuAction()
    {
        $this->load_header();
        $this->view->load('pages/gioi-thieu');
        $this->load_footer();
    }
}
