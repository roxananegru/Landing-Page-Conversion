<?php

define("ROOT_PATH", __DIR__ . DIRECTORY_SEPARATOR);

spl_autoload_register(function(string $className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $classFile = ROOT_PATH . DIRECTORY_SEPARATOR . $className . ".php";

    if (file_exists($classFile)) {
        require_once $classFile;
    } else {
        error_log("Class {$className} not found in {$classFile}");
    }
});
