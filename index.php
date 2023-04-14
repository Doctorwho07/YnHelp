<?php
require_once "./Controllers/ArticleController.php";

$uri = $_SERVER["REQUEST_URI"];
$uri_explode = explode("/", trim($uri, "/"));

$articleController = new ArticleController();

if (sizeof($uri_explode) == 1) {
    include_once './public/views/home.php';
} else {
    switch ($uri_explode[1]) {
        case "login":
            include_once './public/views/login.php';
            break;

        case "aids":
            $aids = $articleController->getAids();
            include_once "./public/views/aids.php";
            break;

        default:
            include_once './public/views/home.php';
            break;
    }
}