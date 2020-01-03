<?php if ( ! defined('PATH_CORE')) die ('Bad requested!');
/**
 * Hàm chạy ứng dụng
 */
function KL_load()
{
    // Include model chính để các model con nó kế thừa
    include_once PATH_CORE . '/KL_Model.php';

    // Get controller và action from url
    if ( URL_QUERRY === 'index' ) {
        $controller = 'index'; 
        $action = 'index';
    } else {
        $main_Model = new KL_Model();
        $pathinfo = pathinfo(URL_QUERRY);

        if ( $pathinfo['dirname'] !== '.' ) {
            // Check langue
        }
        
        $sql = 'SELECT post_type FROM posts WHERE slug = "' . $pathinfo['filename'] . '"';
        $result = $main_Model->db_get_row($sql);
        $main_Model->db_close();

        if ( $result ) {
            $controller = $result['post_type']; 
            $action = $pathinfo['filename'];
        } else {
            $controller = 'notFound';
            $action = 'index';
        }
    }

    // Chuyển đổi tên controller vì nó có định dạng là {Name}_Controller
    $controller = ucfirst(strtolower($controller)) . '_Controller';

    // chuyển đổi tên action vì nó có định dạng {name}Action
    $action = str_replace('-', '_', strtolower($action)) . 'Action';

    // Kiểm tra file controller có tồn tại hay không
    if (!file_exists(PATH_MVC . '/controller/' . $controller . '.php')){
        die ('Không tìm thấy controller');
    }

    // Include controller chính để các controller con nó kế thừa
    include_once PATH_CORE . '/KL_Controller.php';

    // Load Base_Controller
    if (file_exists(PATH_MVC . '/controller/Base_Controller.php')){
        include_once PATH_MVC . '/controller/Base_Controller.php';
    }

    // Gọi file controller vào
    require_once PATH_MVC . '/controller/' . $controller . '.php';

    // Kiểm tra class controller có tồn tại hay không
    if (!class_exists($controller)){
        die ('Không tìm thấy controller');
    }

    // Khởi tạo controller
    $controllerObject = new $controller();

    // Kiểm tra action có tồn tại hay không
    if ( !method_exists($controllerObject, $action) ) {
        $action = 'indexAction';
        if ( !method_exists($controllerObject, $action) ) die ('Không tìm thấy action');
    }

    // Chạy ứng dụng
    $controllerObject->{$action}();
}