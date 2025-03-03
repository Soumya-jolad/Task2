<?php
session_start();

// Database Connection
$conn = new mysqli("localhost", "root", "", "medication_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $address = $_POST['address'];

    $sql = "INSERT INTO users (fullname, email, dob, mobile, password, address) 
            VALUES ('$fullname', '$email', '$dob', '$mobile', '$password', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Medication System</title>
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
        .register-container {
            width: 450px;
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
            margin: 10px 0;
            text-align: left;
        }
        .input-box label {
            font-size: 14px;
            color: #555;
        }
        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 5px;
        }
        .terms {
            text-align: left;
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
            margin-top: 10px;
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

    <div class="register-container">
        <form action="" method="POST">
            <h2>REGISTRATION</h2>
            <p>Already have an account? <a href="login.php">Login Here</a></p>

            <div class="input-box">
                <label>Full Name</label>
                <input type="text" name="fullname" placeholder="Enter your full name" required>
            </div>

            <div class="input-box">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-box">
                <label>Date of Birth</label>
                <input type="date" name="dob" required>
            </div>

            <div class="input-box">
                <label>Mobile No</label>
                <input type="text" name="mobile" placeholder="Enter your mobile number" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>

            <div class="input-box">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>
            </div>

            <div class="input-box">
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter your address" required>
            </div>

            <div class="terms">
                <input type="checkbox" required> I agree to the terms and conditions
            </div>

            <button type="submit"> <i class="fas fa-user-plus"></i> Register</button>
        </form>
    </div>

</body>
</html>