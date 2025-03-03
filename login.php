<?php
session_start();

// Database Connection
$conn = new mysqli("localhost", "root", "", "medication_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header("Location: home.php"); // Redirect to home page
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Medication System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-container {
            width: 350px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }
        h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .input-box {
            position: relative;
            margin: 15px 0;
        }
        .input-box input {
            width: 100%;
            padding: 10px;
            padding-left: 35px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .input-box i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        .remember-me {
            text-align: left;
            margin-bottom: 10px;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #27ae60;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #2ecc71;
        }
        p a {
            color: #007bff;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <form action="" method="POST">
            <h2>LOGIN</h2>
            <p>Don't have an account? <a href="signup.php">Register Here</a></p>

            <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="remember-me">
                <input type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit"> <i class="fas fa-sign-in-alt"></i> Login</button>
        </form>
    </div>

</body>
</html>