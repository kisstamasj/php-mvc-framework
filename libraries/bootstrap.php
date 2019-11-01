<?php

namespace libraries;

error_reporting(E_ERROR);

spl_autoload_register(function($className)
{
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    if(file_exists($className . '.php')){
        include_once $className . '.php';
    } else {
        die("The file doesen't exists: ". $className . '.php');
    }
});
