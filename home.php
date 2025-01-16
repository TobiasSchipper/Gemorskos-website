<?php
// Include Composer autoload
require_once __DIR__ . '/./vendor/autoload.php';

use Dotenv\Dotenv;

// Initialize Dotenv and load the .env file
try {
    $dotenv = Dotenv::createImmutable(__DIR__, 'test.env');
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
                window.location.href = 'index.html';
            </script>";
        exit;
    }
} else {
    // If the request method is not POST, redirect to the login page
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
    </head>
<body>
    <div class="content">
        <div>
            <img src="./Germorskos-logo.webp" alt="Germsorkos Logo">
        </div>
        <div>
            <button>Office 365</button>
            <button>Mail</button>
            <button>Files</button>
            <button>Agenda</button>
            <button>LTT</button>
            <button>Instellingen</button>
        </div>
    </div>
    <div class="footer">
        <p>&#169; 2024/2025 Germorskos</p>
    </div>
</body>
</html>
