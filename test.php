<?php
echo $_SERVER['REQUEST_URI'];
$url = explode("/", $_SERVER['REQUEST_URI']);
var_dump($url); 
echo array_pop($url);
?>
