<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /Gemorskos-website/src/login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Germorskos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="content">
        <img src="" alt="">
        <h1>Welcome to Germorskos</h1>
        <p>You are logged in!</p>
        <a href="/Gemorskos-website/src/logout">Logout</a>
    </div>
    <div class="footer">
        <p>&#169; 2024/2025 Germorskos</p>
    </div>
</body>
</html>