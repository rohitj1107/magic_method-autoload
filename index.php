<?php


function __autoload($class){
    require "class/". $class . '.php';
}

$one = new first;
$two = new second;

?>
