<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Germorskos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="content">
        <div class="login">
            <form action="/Gemorskos-website/src/login" method="post">
                <h2>Login</h2>
                <div class="inputGroup">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="inputGroup">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <button class="login" type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="/Gemorskos-website/src/register">Register here</a></p>
        </div>
    </div>
    <div class="footer">
        <p>&#169; 2024/2025 Germorskos</p>
    </div>
</body>
</html>