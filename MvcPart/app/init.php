<?php

    require_once 'core/App.php '; 
    require_once 'core/Controller.php';

    error_reporting(E_ALL);
    /**
     * Configuration for errors reporting : 0/1
     */
    ini_set("display_errors", 1);
    define('URL', 'http://localhost/');
    /**
     * Configuration for sql:
     */
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'cabinetmanagement');
    define('DB_USER', 'cabinet');
    define('DB_PASS', 'cabinet');

?>


