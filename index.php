<?php
require_once "./Models/Article.php";

$uri = $_SERVER["REQUEST_URI"];
$uri_explode = explode("/", trim($uri, "/"));

if (sizeof($uri_explode) == 1) {
    $article = new Article();
    var_dump($article); die();

    include_once './public/views/home.php';
} elseif ($uri_explode[1] == "login") {
    include_once './public/views/login.php';
}