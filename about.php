<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANGU - Overview</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
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
            width: 30px; /* smaller logo size */
            height: 30px;
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
            background-color: #e04444;
        }

        .main-content {
            flex-grow: 1;
            background: url('bg gudang.jpg') no-repeat center center/cover;
            background-size: cover;
            background-position: center;
            padding: 20px;
            display: flex;
            justify-content: left;
            align-items: left;
            position: relative;
            flex-direction: column;
            color: #fff;
            text-align: justify;
        }

        .main-content img {
            margin-top: 80px;
            margin-left: 500px;
            width: 250px; /* smaller logo size for the main content */
            height: 250px;
            margin-bottom: 20px;
        }

        .main-content h2 {
            text-align: left;
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .main-content p, .main-content ul {
            font-size: 16px;
            margin-top: 10px;
            line-height: 1.5;
        }

        .main-content ul {
            margin-top: 10px;
            margin-top: 10px;
            padding-left: 20px;
        }

        .main-content ul li {
            margin-top: 10px;
            margin-bottom: 10px;
        }

    </style>
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
                <li><a href="#"> About</a></li>
            </ul>
            <a href="logout.php" class="logout"> Log out</a>
        </div>
        <div class="main-content">
            <img src="logo.png" alt="Warehouse Icon">
            <h2>Sistem Manajemen Gudang (SIMANGU)</h2>
            <p>Sistem Manajemen Gudang (SIMANGU) adalah perangkat lunak yang dirancang untuk mengoptimalkan operasi gudang, dan meningkatkan efisiensi penyimpanan. Sistem ini memungkinkan bisnis untuk mengelola seluruh siklus mulai dari penerimaan barang hingga pengiriman ke pelanggan.
            Fitur-fitur utama pada sistem ini adalah, Pengguna dapat memberikan penilaian pada sistem simangu dan Pengguna dapat mengecek status pesanan pada sistem simangu.
            Berikut beberapa manfaat pada Sistem Manajemen Gudang (SIMANGU):</p>
            <ul>
                <li>Meningkatkan efisiensi operasional</li>
                <li>Menyediakan visibilitas yang lebih baik</li>
                <li>Meningkatkan kepuasan pelanggan</li>
            </ul>
        </div>
    </div>
</body>
</html>
