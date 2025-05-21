<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">

    <title>Registration Form</title>
</head>

<body>
    <div class="reg_container">
        <!-- <?php
                if (isset($_POST['register'])) {
                    $fullname = $_POST["fullname"];
                    $email = $_POST["email"];
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $repeat_password = $_POST["repeat_password"];

                    $errors = array();

                    if (empty($fullname) or empty($email) or empty($username) or empty($password) or empty($repeat_password)) {
                        array_push($errors, "All fields are required");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not valid");
                    }
                    if (strlen($password) < 6) {
                        array_push($errors, "Password must be at least 6 characters");
                    }
                    if ($password !== $repeat_password) {
                        array_push($errors, "Passwords do not match");
                    }
                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        //database connection
                    }
                }
                ?> -->

        <h1>Palace</h1>
        <p>Register your Account.</p>
        <form method="post" action="registration.php">
            <input type="text" name="fullname" placeholder="Enter Your Full Name" required>
            <input type="email" name="email  " placeholder="example@gmail.com" required>
            <input type="text" name="username" placeholder="Enter Your Username" required>
            <input type="password" name="password" placeholder="Enter Password" minlength="6" maxlength="20" required>
            <input type="text" name="repeat_password" placeholder="Confirm Password" required>
            <p>Do you have an account? <a href="login.php" class="pseudolink">Sign In</a></p>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>

</html>