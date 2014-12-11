<?php
define('PROJECT_NAME', 'misfit');

// HTTP
define('HTTP_SERVER', 'http://localhost/'. PROJECT_NAME .'/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/'. PROJECT_NAME .'/');

// DIR
define('DIR_APPLICATION', '/var/www/html/'. PROJECT_NAME .'/catalog/');
define('DIR_SYSTEM', '/var/www/html/'. PROJECT_NAME .'/system/');
define('DIR_LANGUAGE', '/var/www/html/'. PROJECT_NAME .'/catalog/language/');
define('DIR_TEMPLATE', '/var/www/html/'. PROJECT_NAME .'/catalog/view/theme/');
define('DIR_CONFIG', '/var/www/html/'. PROJECT_NAME .'/system/config/');
define('DIR_IMAGE', '/var/www/html/'. PROJECT_NAME .'/image/');
define('DIR_CACHE', '/var/www/html/'. PROJECT_NAME .'/system/cache/');
define('DIR_DOWNLOAD', '/var/www/html/'. PROJECT_NAME .'/system/download/');
define('DIR_UPLOAD', '/var/www/html/'. PROJECT_NAME .'/system/upload/');
define('DIR_MODIFICATION', '/var/www/html/'. PROJECT_NAME .'/system/modification/');
define('DIR_LOGS', '/var/www/html/'. PROJECT_NAME .'/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'misfit');
define('DB_PREFIX', 'oc_');
