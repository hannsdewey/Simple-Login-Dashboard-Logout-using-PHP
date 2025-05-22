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
        <form method="POST" action="">
            <h1>Palace</h1>
            <div class="input-field">
                <input type="text" name="username" placeholder="Enter Your Username" required>
                <input type="password" name="password" placeholder="Enter Your Password" id="myInput" required>
            </div>
            <div class="password-options">
                <label for="show">
                    <input type="checkbox" onclick="myFunction()" id="showpass">
                    <p>Show Password</p>
                </label>
                <a href="">Forgot Password?</a>
            </div>
            <button type="submit" name="login">Login</button>
            <div class="account-options">
                <p>Don't have an account? <a href="registration.php" class="pseudolink">Sign up
                    </a></p>
            </div>
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

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>