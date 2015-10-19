<?php
require_once(dirname(__DIR__) . '/system/config/common.php');
// HTTP
define('HTTP_SERVER', 'http://' . HTTP_HOST . '/'. DIR_SUB_FOLDER . 'admin/');
define('HTTP_CATALOG', 'http://' . HTTP_HOST . '/' . DIR_SUB_FOLDER);

// HTTPS
define('HTTPS_SERVER', 'http://' . HTTP_HOST . '/'. DIR_SUB_FOLDER . 'admin/');
define('HTTPS_CATALOG', 'http://' . HTTP_HOST . '/' . DIR_SUB_FOLDER);

// DIR
define('DIR_APPLICATION',       DIR_APPLICATION_ROOT . '/admin/');
define('DIR_LANGUAGE',          DIR_APPLICATION_ROOT . '/admin/language/');
define('DIR_TEMPLATE',          DIR_APPLICATION_ROOT . '/admin/view/template/');
define('DIR_CATALOG',           DIR_APPLICATION_ROOT . '/catalog/');
