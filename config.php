<?php
require_once( __DIR__ . '/system/config/common.php');
// HTTP
define('HTTP_SERVER', 'http://' . HTTP_HOST . '/' . DIR_SUB_FOLDER);


// HTTPS
define('HTTPS_SERVER', 'http://' . HTTP_HOST . '/' . DIR_SUB_FOLDER);


// DIR
define('DIR_APPLICATION',   DIR_APPLICATION_ROOT . '/catalog/');
define('DIR_LANGUAGE',      DIR_APPLICATION_ROOT . '/catalog/language/');
define('DIR_TEMPLATE',      DIR_APPLICATION_ROOT . '/catalog/view/theme/');