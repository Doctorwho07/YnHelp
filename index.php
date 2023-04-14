<?php
require_once "./Controllers/ArticleController.php";
require_once "./Controllers/UserController.php";

$uri = $_SERVER["REQUEST_URI"];
$uri_explode = explode("/", trim($uri, "/"));

$articleController = new ArticleController();
$userController = new UserController();

if (sizeof($uri_explode) == 1) {
    include_once './public/views/home.php';
} else {
    switch ($uri_explode[1]) {
        case "registred":
            if ($_POST["password"] == $_POST["confirm_password"]) {
                var_dump($_POST); die();
                break;
            }
            $error = "Vos identifiants sont incorrects";
            include_once './public/views/siginusers.php';
            break;

        case "login":
            if ($userController->isConnected()) {
                die("Vous êtes connecté !");
            } else {
                include_once './public/views/authusers.php';
                break;
            }

        case "passforget":
            include_once './public/views/passforget.php';
            break;

        case "siginusers":
            include_once './public/views/siginusers.php';
            break;

        case "aids":
            $aids = $articleController->getAids();
            include_once "./public/views/aids.php";
            break;

        case "loged":
            $userController;
            break;

        default:
            include_once './public/views/home.php';
            break;
    }
}