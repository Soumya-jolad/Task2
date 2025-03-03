 <?php
session_start();

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Administrator</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0A1E2D;
            color: white;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #112233;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Logout Button */
        .logout-btn {
            background-color: #D9534F;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .logout-btn:hover {
            background-color: #C9302C;
        }

        /* Main Section */
        .main-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }

        .text-content h1 {
            font-size: 50px;
        }

        .text-content input {
            padding: 10px;
            width: 300px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <div class="logo">Medical Insurance Company</div>
        <nav>
<?php
session_start();

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Administrator</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0A1E2D;
            color: white;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #112233;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Logout Button */
        .logout-btn {
            background-color: #D9534F;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .logout-btn:hover {
            background-color: #C9302C;
        }

        /* Main Section */
        .main-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }

        .text-content h1 {
            font-size: 50px;
        }

        .text-content input {
            padding: 10px;
            width: 300px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <div class="logo">Medical Insurance Company</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </nav>
        <a href="index.php?logout=true"><button class="logout-btn">Logout</button></a>
    </header>

    <!-- Main Section -->
    <section class="main-section">
        <div class="text-content">
            <h1>Hospital <span>Administrator</span></h1>
            <input type="text" placeholder="Search...">
        </div>
        <div class="image-content">
            <img src="hospital-admin.png" alt="Doctors and Admin" width="400">
        </div>
    </section>

</body>
</html