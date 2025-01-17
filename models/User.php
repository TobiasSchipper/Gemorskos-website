<?php

class User {
    private $id;
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public static function createUser($pdo, $username, $password) {
        $user = new self($username, $password);
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $user->username);
        $stmt->bindParam(':password', $user->password);
        return $stmt->execute();
    }

    public static function findUserByUsername($pdo, $username) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>