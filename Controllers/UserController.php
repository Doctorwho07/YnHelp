<?php
require_once __DIR__ . "/../Models/User.php";

class UserController 
{
    private PDO $connexion;

public function __construct()
{
    $db = new Database();
    $this->connexion = $db->getConnection();
}
}