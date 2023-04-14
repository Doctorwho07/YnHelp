<?php
require_once "./Controllers/ArticleController.php";

$uri = $_SERVER["REQUEST_URI"];
$uri_explode = explode("/", trim($uri, "/"));

$articleController = new ArticleController();

if (sizeof($uri_explode) == 1) {
    include_once './public/views/description.php';
} else {
    switch ($uri_explode[1]) {
        case "login":
            include_once './public/views/authusers.html';
            break;

        case "description":
            include_once './public/views/description.php';
        case "user" :
            include_once './public/views/user.php';
            break;

        case "aids":
            if (isset($uri_explode[2])) {
                if (ctype_digit(strval($uri_explode[2]))) {
                    $aid = $articleController->getArticleById(intval($uri_explode[2]));
                    include_once "./public/views/aid.php";
                    break;
                }
            }
            $aids = $articleController->getAids();
            die("aids page");
            include_once "./public/views/aids.php";
            break;

        default:
            include_once './public/views/home.php';
            break;
    }
}