<?php

$uri = $_SERVER["REQUEST_URI"];
$uri_explode = explode("/", trim($uri, "/"));

if (sizeof($uri_explode) == 1) {
    include_once './public/views/home.php';
}