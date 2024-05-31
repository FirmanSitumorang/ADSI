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
            display: flex;
            height: 100vh;
            width: 100%;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100vh;
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
            background-color: #e04444;
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

        .main-content a{
            text-decoration: none;

        }

        .cards-wrapper {
            width: 100%;
            max-width: 800px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            width: 100%;
        }

        .card {
            background-color: #396ebd;
            padding: 30px;
            text-align: center;
            color: black;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .card img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 24px;
            margin: 0;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .last-card {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .last-card .card {
            width: calc(50% - 10px); /* Ensure the card doesn't exceed the grid column width */
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
                <li><a href="#"> Profile</a></li>
                <li><a href="#"> Home</a></li>
                <li><a href="#"> Notification</a></li>
                <li><a href="#"> About</a></li>
            </ul>
            <a href="logout2.php" class="logout"></i> Log out</a>
        </div>
        <div class="main-content">
            <div class="cards-wrapper">
                <div class="cards">
                <a href="barangmasuk.php">
                    <div class="card">
                        <img src="box masuk.png" alt="Input Barang Masuk">
                        <h3>Input Barang Masuk</h3>
                    </div>
                </a>
                <a href="barangout.php">
                    <div class="card">
                        <img src="box keluar.png" alt="Input Barang Keluar">
                        <h3>Input Barang Keluar</h3>
                    </div>
                </a>
                <a href="statuspesan.php">
                    <div class="card">
                        <img src="input.png" alt="Input Status Barang">
                        <h3>Input Status Barang</h3>
                    </div>
                </a>
                <a href="mengelola.php">
                    <div class="card">
                        <img src="mengelola.png" alt="Mengelola Sistem">
                        <h3>Mengelola Sistem</h3>
                    </div>
                </a>
                </div>
                <a href="lokasi.php">
                <div class="last-card">
                    <div class="card">
                        <img src="lokasi.png" alt="Lokasi Barang">
                        <h3>Lokasi Barang</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>
</body>
</html>
