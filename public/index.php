<?php


define('ROOT_URL','http://' .$_SERVER['SERVER_NAME']);
define('ROOT_ASSETS',ROOT_URL .'/public/assets/');
define('ROOT_CSS',ROOT_ASSETS .'css/');
define('ROOT_JS',ROOT_ASSETS .'javascript/');
define ('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

    require_once '../app/libraries/bootstrap.php';
    $init = new Router();
    $init ->loadController();