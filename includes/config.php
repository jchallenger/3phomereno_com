<?php
/*
// Database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'cl_db');

*/
defined('DEBUG_LEVEL') OR define('DEBUG_LEVEL', E_ALL);
//define('DEBUG_LEVEL', E_USER_ERROR);

$config = array();
$config['controller_folder'] = 'controllers';

$config['template'] = '_template';
$config['view_folder'] = 'views';

$config['base_url'] = sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
$config['base_url'] = 'https://3phomerenovations.com/';
//$config['base_url'] = 'http://localhost/3p_old/';

$config['phone'] = "416 697-7053";
$config['http_status_200'] = $_SERVER["SERVER_PROTOCOL"]." 200 OK";

$config['http_status_400'] = $_SERVER["SERVER_PROTOCOL"]." 400 Bad Request";
$config['http_status_401'] = $_SERVER["SERVER_PROTOCOL"]." 401 Authorization Required";
$config['http_status_403'] = $_SERVER["SERVER_PROTOCOL"]." 403 Forbidden";
$config['http_status_404'] = $_SERVER["SERVER_PROTOCOL"]." 404 Not Found";
$config['http_status_500'] = $_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error";
