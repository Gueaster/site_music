<?php

require_once(__DIR__ . "/../vendor/autoload.php");
define('APP_DIR', __DIR__ . '/..');

$uri = $_SERVER['REQUEST_URI'];

$uri = explode("/", trim($uri, "/"));

if ($uri[0] == "") { $uri[0] = "index"; }

if ( !file_exists("../templates/".$uri[0].".phtml") )
{
    header("Location: /");
}

try {
    require_once "../templates/".$uri[0].".phtml";
}
catch (Exception $exception){
    echo $exception;
}