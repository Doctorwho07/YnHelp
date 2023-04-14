<?php
require_once "./Database.php";

class Article
{
    private PDO $connexion;

    public function __construct()
    {
        $db = new Database();
        $this->connexion = $db->getConnection();
    }
}
