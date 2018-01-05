<?php 

require __DIR__ . '/include/Router.class.php';
require __DIR__ . '/include/Template.class.php';
require __DIR__ . '/include/routing.php';

$Router = new Router();
$Router->register($routing);
echo $Router->init($_GET, $_POST);