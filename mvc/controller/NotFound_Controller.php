<?php
if (!defined('PATH_CORE')) die('Bad requested!');

class NotFound_Controller extends Base_Controller
{
    public function indexAction()
    {
        $this->load_header();
        $this->view->load('not-found/index');
        $this->load_footer();
    }
}
