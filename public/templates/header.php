<?php
require_once "./Controllers/UserController.php";

$userController = new UserController();

if ($userController->isConnected()) {
    $user = $userController->getUserById($_COOKIE["YnHelp"]);
    $username = $user->getUsername();
} else {
    $username = "login";
}

?>

<div class="navbar">
    <div class="back">
        <a href="../YnHelp"><img src="./public/assets/logo.png" alt=""/></a>
        <a href="../YnHelp"><h3>YnHelp</h3></a>
    </div>
    <div class="link">
        <a href="/YnHelp/aids"><h3>Aides</h3></a>
        <div class="pipe"><h3>|</h3></div>
        <a href="/YnHelp/associations"><h3>Associations</h3></a>
    </div>
    <div class="search" style="margin-right: 48vw;">
        <img src="./public/assets/loupe.png" alt=""/>
        <h3>Rechercher</h3>
    </div>

    <div class="login">
        <a href="/YnHelp/login"><img src="./public/assets/user.png" alt=""/></a>
        <a href="/YnHelp/login"><h3><?= $username ?></h3></a>
    </div>
</div>
