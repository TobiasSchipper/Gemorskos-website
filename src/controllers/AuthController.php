<?php

require_once 'config/database.php';
require_once 'models/User.php';

class AuthController {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function login($username, $password) {
        $user = User::findUserByUsername($this->db, $username);
        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: /Gemorskos-website/src/home');
            exit();
        } else {
            return 'Invalid username or password';
        }
    }

    public function register($username, $password) {
        return User::createUser($this->db, $username, $password);
    }
}
?>