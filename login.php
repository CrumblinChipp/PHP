<?php
session_start();
$error_username = "";
$error_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        $error_username = "Username is required!";
    }
    if (empty($password)) {
        $error_password = "Password is required!";
    }
    if (empty($error_username) && empty($error_password)) {
        if ($username === "student" && $password === "1234") {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;

            header("Location: resume.php");
            exit();
        } else {
            // Wrong credentials
            $error_username = "Invalid Username!";
            $error_password = "Invalid Password!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .container_login {
            text-align: center;
            max-width: 250px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(20, 20, 20, 0.8);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.7);
            color: white;
        }

        button {
            padding: 10px 15px;
            font-size: 18px;
            border-radius: 12px;
            border: 2px solid white;
            color: white;
            background: #444;
            cursor: pointer;
        }

        .error {
            font-size: 13px;
            color: pink;
            margin: 5px 0 10px 0;
        }
    </style>
</head>
<body>
    <div class="container_login">
        <h2>LOGIN PAGE</h2>
        <form method="POST">
            <label>Username:</label><br>
            <input type="text" placeholder="Username" name="username"><br>
            <p class="error"><?php echo $error_username; ?></p>

            <label>Password:</label><br>
            <input type="password" placeholder="Password" name="password"><br>
            <p class="error"><?php echo $error_password; ?></p>

            <button type="submit"><strong>Login</strong></button>
        </form>
    </div>
</body>
</html>
