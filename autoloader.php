<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 1:17 PM
 */
spl_autoload_register(function ($class) {
    $prefix = 'validator\\';
    $base_dir = __DIR__ . '/';

    // first checks whether the requested class belongs to the validator namespace
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Constructs the path to the file by replacing the namespace separators (\) with directory separators (/).
    // If the file exists, it is required, and the class is loaded.
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});