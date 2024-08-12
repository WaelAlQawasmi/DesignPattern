<?php
spl_autoload_register(function ($class) {
    $prefix = 'BookCollection\\';
    $base_dir = __DIR__ . '/BookCollection/';
    
    $len = strlen($prefix);
    // to check if the class exists
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    
    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});