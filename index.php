<?php
require_once 'config/database.php';
require_once 'controllers/AuthController.php';

$authController = new AuthController();

$requestUri = str_replace('/Gemorskos-website', '', $_SERVER['REQUEST_URI']);

switch ($requestUri) {
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $error = $authController->login($username, $password);
        }
        include 'views/login.php';
        break;
    case '/register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $authController->register($username, $password);
            header('Location: /Gemorskos-website/login');
            exit();
        }
        include 'views/register.php';
        break;
    case '/home':
        include 'views/home.php';
        break;
    case '/logout':
        session_start();
        session_destroy();
        header('Location: /Gemorskos-website/login');
        exit();
    default:
        include 'views/login.php';
        break;
}
?>