<?php

$routes = array();
// scan folder, add each file to routes
$files = scandir($config['controller_folder']);
foreach($files as $file){
    $r = strtolower(substr($file, 0, strrpos($file,'.')));
    if(strlen($r) > 3){
        $routes[$r] = $file;
    }
}

// Add custom routes
$routes['404_not_found'] = 'home/not_found';
$routes['default_controller'] = 'home';

$routes['seven/home'] = 'home/wat/7';
