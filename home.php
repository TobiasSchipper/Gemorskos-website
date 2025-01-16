<?php
// Include Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Initialize Dotenv and load the .env file
try {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../', 'token.env');
    $dotenv->load();
} catch (Exception $e) {
    die('Could not load .env file.');
}

// Check if the token is passed via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_token = isset($_POST['token']) ? $_POST['token'] : null;
    $valid_token = $_ENV['TOKEN']; // Assuming TOKEN is stored in the .env file

    // Validate the token
    if ($input_token === $valid_token) {
        // Token is valid, proceed to the portfolio page
        ;
    } else {
        // Token is invalid, show an error message
        echo "<script>
                alert('Verkeerde Token ingevoerd!');
                window.location.href = 'login.html';
            </script>";
        exit;
    }
} else {
    // If the request method is not POST, redirect to the login page
    header("Location: ../pages/login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>