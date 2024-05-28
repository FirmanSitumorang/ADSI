<?php
// welcome.php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100vh;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .sidebar {
            background-color: #396ebd;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .logo h2 {
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar ul li {
            width: 100%;
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #fff;
            background-color: #0a387e;
            padding: 10px;
            text-align: center;
            display: block;
            width: 100%;
            border-radius: 50px;
            transition: background 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #315a9d;
        }

        .sidebar .logout {
            margin-top: auto;
            background-color: #0a387e;
            padding: 10px;
            width: 100%;
            text-align: center;
            border-radius: 50px;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .sidebar .logout:hover {
            background-color: #315a9d;
        }

        .main-content {
            flex: 1;
            background: url('bg gudang.jpg') no-repeat center center/cover;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
         
        .main-content a {
            background-color: #396ebd;
            width: 100%;
            max-width: 800px;
            padding: 30px;
            margin: 20px 0;
            text-align: center;
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }
        
        .card {
            background-color: #396ebd;
            width: 100%;
            max-width: 800px;
            padding: 30px;
            margin: 20px 0;
            text-align: center;
            color: #fff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .card img {
            width: 70px;
            height: 70px;
            margin-right: 20px;
        }

        .card h3 {
            font-size: 24px;
            text-decoration: none;
        }
        

        .card:hover {
            transform: translateY(-10px);
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="logo.png" alt="SIMANGU Logo">
                <h2>SIMANGU</h2>
            </div>
            <ul>
                <li><a href="profile.php"> Profile</a></li>
                <li><a href="welcome.php"> Home</a></li>
                <li><a href="notif2.php"> Notification</a></li>
                <li><a href="about.php"> About</a></li>
            </ul>
            <a href="logout.php" class="logout"></i> Log out</a>
        </div>
        <div class="main-content">
            <a href="">
            <div class="card">
                <img src="kardus_list.png" alt="Status Barang">
                <h3>Status Barang</h3>
            </div>
            </a>
            <a href="">
            <div class="card">
                <img src="lokasi.png" alt="Lokasi Barang">
                <h3>Lokasi Barang</h3>
            </div>
            </a>
            <a href="rategudang.php">
            <div class="card">
                <img src="penilaian.png" alt="Rate Gudang">
                <h3>Rate Gudang</h3>
            </div>
            </a>
        </div>
    </div>
</body>
</html>
