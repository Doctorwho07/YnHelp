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

    public function isConnected()
    {
        if (isset($_COOKIE["YnHelp"])) {
            return True;
        }
        return False;
    }

    public function insertUser(string $username, string $password, string $email)
    {
        $passwordHash =  password_hash($password, PASSWORD_ARGON2I);
        $request = $this->connexion->prepare(
            'insert into user(username, password, email) VALUES (:username, :password, :email)');
        $request->bindParam(":username", $username);
        $request->bindParam(":password", $passwordHash);
        $request->bindParam(":email", $email);
        return $request->execute();
    }

    public function connect(string $password, string $email)
    {
        $request = $this->connexion->prepare(
            'select id, password from user where email = :email');
        $request->bindParam(":email", $email);
        $request->execute();
        $resultPasswords = $request->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultPasswords as $resultPassword) {
            if (password_verify($password, $resultPassword["password"])) {
                return $this->getUserById($resultPassword["id"]);
            }
        }

        return null;
    }

    public function getUserById(int $id)
    {
        $request = $this->connexion->prepare(
            'select id, username, email from user where id = :id');
        $request->bindParam(":id", $id);
        $request->execute();
        $userBD = $request->fetch(PDO::FETCH_ASSOC);
        $user = new User();
        $user->setId($userBD["id"])->setEmail($userBD["email"])->setUsername($userBD["username"]);
        return $user;
    }
}
