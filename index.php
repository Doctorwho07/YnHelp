<?php
require_once "./Controllers/ArticleController.php";

$uri = $_SERVER["REQUEST_URI"];
$uri_explode = explode("/", trim($uri, "/"));
print_r($uri_explode);

$articleController = new ArticleController();

if (sizeof($uri_explode) == 1) {
    include_once './public/views/home.php';
} elseif ($uri_explode[1] == "login") {
    include_once './public/views/login.php';
} elseif ($uri_explode[1] == "aids") {
    include_once './public/views/home.php';
    $aids = $articleController->getAids();
    include_once "./public/views/aids.php";
}