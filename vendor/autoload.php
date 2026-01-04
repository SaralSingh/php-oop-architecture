<?php
$root = dirname(__DIR__).'/app/';
spl_autoload_register(function ($class) use ($root) {
    
    $paths = [
        $root . '/Contracts/',
        $root . '/Services/',
        $root . '/Models/',
        $root . '/Controllers/',
    ];

    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require $file;
            return;
        }
    }
});