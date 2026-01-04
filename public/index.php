<?php

// ✅ PROJECT ROOT (STRING, NOT OBJECT)
require dirname(__DIR__) . '/app/vendor/autoload.php';
$root = dirname(__DIR__);

// ✅ SIMPLE ROUTER
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$basePath = '/oop/msk/public';
$path = str_replace($basePath, '', $uri);

$routes = require dirname(__DIR__). '/routes/web.php';

// execute route
if (isset($routes[$path])) {
    $routes[$path]();
} else {
    $routes['404']();
    // echo '404 Not Found';
}


// if ($path === '/' || $path === '') {

//     require $root . '/resources/views/home.php';

// } elseif ($path === '/students') {

//     $school = new School();
//     echo '<h1>Students</h1>';
//     $school->DisplayNames(new Student());

// } elseif ($path === '/teachers') {

//     $school = new School();
//     echo '<h1>Teachers</h1>';
//     $school->DisplayNames(new Teacher());

// } else {

//     echo '404 Not Found';
// }
