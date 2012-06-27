<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('BASE_PATH', dirname(realpath(__FILE__)));

echo $_GET['url'];
echo '<hr>';

echo BASE_PATH . '<br>';
//  $url = $_GET['url'];
echo $_SERVER['REQUEST_URI'] . '<br>';
echo $_SERVER['PATH_INFO'];


require('virusMVC.php');

?>