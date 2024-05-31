<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Status Pesanan</title>
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

        .form-wrapper {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background-color: #0a387e;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header h2 {
            color: #ffffff;
            margin: 0;
        }

        .form-content {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 80px;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-group label {
            flex: 1;
            color: #333;
        }

        .form-group input,
        .form-group select {
            flex: 2;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 10px;
        }

        .form-group input[type="date"] {
            padding: 9px 10px;
        }

        .status-group {
            display: flex;
            justify-content: flex-start; 
            align-items: center;
            margin-bottom: 10px;
            width: 100%;
            text-align: left;
        }

        .status-group label {
            flex: 1;
            color: #333;
            margin-right:10px;
        }

        .status-group input {
            margin: 0;
        }

        .btn-submit {
            background-color: #0a387e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100px;
            margin-top: 20px;
            display: block;
            margin: center;
        }

        .btn-submit:hover {
            background-color: #315a9d;
        }

        .back-to-home {
            margin-top: 10px;
            text-align: center;
        }

        .back-to-home a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }

        .back-to-home a:hover {
            color: #315a9d;
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
            <li><a href="#"> Profile</a></li>
            <li><a href="welcome2.php"> Home</a></li>
            <li><a href="#"> Notification</a></li>
            <li><a href="#"> About</a></li>
        </ul>
        <a href="logout2.php" class="logout"> Log out</a>
    </div>
    <div class="main-content">
        <div class="form-wrapper">
            <div class="header">
                <h2>INPUT STATUS PESANAN</h2>
            </div>
            <div class="form-content">
                <form role="form" action="insertstatus.php" method=post>
                <div class="form-group">
                    <label for="id-barang">ID Barang</label>
                    <input type="text" id="id-barang" name="id-barang" placeholder="">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="">
                </div>
                <div class="form-group">
                    <label for="nama-barang">Nama Barang</label>
                    <input type="text" id="nama-barang" name="nama-barang" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tanggal-masuk">Tanggal Masuk</label>
                    <input type="date" id ="tanggal-masuk" name="tanggal-masuk">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" id="lokasi" name="lokasi" placeholder="">
                </div>
                <div class="status-group">
                <label for="status">Status</label>
                <input type="checkbox" id="digudang" name="status" value="digudang"> Digudang
                <input type="checkbox" id="telah-diambil" name="status" value="telah-diambil"> Telah Diambil
                </div>
                <button class="btn-submit">Input</button>
                </form>
            </div>
    

        </div>
        <div class="back-to-home">
            <a href="welcome2.php"><u>Back to Home</u></a>
        </div>
    </div>
</div>
</body>
</html>
