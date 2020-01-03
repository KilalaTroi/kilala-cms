<?php if ( ! defined('PATH_CORE')) die ('Bad requested!');

class KL_Helper_Loader
{
    /**
     * Load helper
     * 
     * @param   string
     * @desc    hàm load helper, tham số truyền vào là tên của helper
     */
    public function load($helper)
    {
        $helper = ucfirst($helper) . '_Helper';
        require_once(PATH_CORE . '/helper/' . $helper . '.php');
    }
}