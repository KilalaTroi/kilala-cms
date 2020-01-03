<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Load config
include_once realpath(dirname(__FILE__) . '/..') . '/config/common.php';

// Mở file KL_Common.php, file này chứa hàm KL_Load() chạy hệ thống
include_once PATH_CORE . '/KL_Common.php';
KL_load();
?>