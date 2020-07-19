<?php

function loadClassesFromDirectory($classname)
{
    $directory = 'classes/';
    $extension = '.php';
    $prefix = '.class';
    $fullPath = $directory  . $classname . $prefix . $extension;
    $alternatePath = $directory . $classname . $extension;
    if (file_exists($fullPath)) {
        include $fullPath;
    } else if (file_exists($alternatePath)) {
        include $alternatePath;
    } else {
        echo "error" . $classname;
        return false;
    }
}


spl_autoload_register('loadClassesFromDirectory');