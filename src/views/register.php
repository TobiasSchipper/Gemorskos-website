<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Germorskos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="content">
        <div class="register">
            <form action="/Gemorskos-website/src/register" method="post">
                <h2>Register</h2>
                <div class="inputGroup">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="inputGroup">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                </div>
                <button class="register" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>&#169; 2024/2025 Germorskos</p>
    </div>
</body>
</html>