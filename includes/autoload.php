<?php

spl_autoload_register(function($className) {
    $className = strtolower(str_replace("\\", "/", $className));
    include 'classes/'.$className.'.class.php';
});