<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="log_container">
        <h1>Palace</h1>
        <p>Login your account.</p>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Enter Your Username" required>
            <input type="password" name="password" placeholder="Enter Your Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>

</html>

<?php

session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    $validUsername = "admin";
    $validPassword = "123456";

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>