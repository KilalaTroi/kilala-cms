<?php if ( ! defined('PATH_CORE')) die ('Bad requested!');

class KL_Controller
{
    // Đối tượng view
    protected $view     = NULL;

    // Đối tượng model
    protected $model    = NULL;

    // Đối tượng helper
    protected $helper  = NULL;

    /**
     * Hàm khởi tạo
     *
     * @desc    Load các thư viện cần thiết
     */
    public function __construct($is_controller = true)
    {
        // Load Helper
        require_once PATH_CORE . '/loader/KL_Helper_Loader.php';
        $this->helper = new KL_Helper_Loader();

        // Load View
        require_once PATH_CORE . '/loader/KL_View_Loader.php';
        $this->view = new KL_View_Loader();

        // Loader Model
        require_once PATH_CORE . '/loader/KL_Model_Loader.php';
        $this->model = new KL_Model_Loader();
    }
}