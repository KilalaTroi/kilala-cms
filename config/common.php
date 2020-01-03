<?php
// Đường dẫn tới hệ  thống
define('PATH_CORE', realpath(dirname(__FILE__) . '/..') . '/core');
define('PATH_MVC', realpath(dirname(__FILE__) . '/..') . '/mvc');
define('PATH_CONFIG', realpath(dirname(__FILE__) . '/..') . '/config');
define('PATH_PUBLIC', dirname(__FILE__));

// Lấy thông số cấu hình
require_once (PATH_CONFIG . '/db.php');

// Lấy param url
define('URL_QUERRY', isset($_GET['q']) ? $_GET['q'] : 'index');