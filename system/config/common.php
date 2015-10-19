<?php
define('HTTP_HOST', $_SERVER["HTTP_HOST"]);
define('DIR_APPLICATION_ROOT', realpath(dirname(dirname(__DIR__))));
define('DIR_SUB_FOLDER', str_replace('\\', '/', str_replace(realpath($_SERVER['DOCUMENT_ROOT']) . DIRECTORY_SEPARATOR, '', DIR_APPLICATION_ROOT . DIRECTORY_SEPARATOR)));

// DIR
define('DIR_SYSTEM',        DIR_APPLICATION_ROOT . '/system/');
define('DIR_IMAGE',         DIR_APPLICATION_ROOT . '/image/');
define('DIR_DOWNLOAD',      DIR_APPLICATION_ROOT . '/download/');
define('DIR_DATABASE',      DIR_SYSTEM . 'database/');
define('DIR_CONFIG',        DIR_SYSTEM . 'config/');
define('DIR_LOGS',          DIR_SYSTEM . 'logs/');
define('DIR_CACHE',         DIR_SYSTEM . 'cache/');
define('DIR_MODIFICATION',  DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD',        DIR_SYSTEM . 'storage/upload/');

require_once(DIR_CONFIG . 'db.php');