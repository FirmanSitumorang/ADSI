<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengatur Lokasi Barang</title>
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

        .form-wrapper h2 {
            margin-bottom: 20px;
            color: #ffffff;
            background-color: #0a387e;
            width: 100%;
            text-align: center;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(-100%);
        }

        .form-content {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-bottom: 20px;
            padding-top: 30px; 
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
            margin: auto;
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
        
        .back-to-home u {
            color: white;
        }

        .back-to-home a:hover {
            color: #315a9d;
        }

        .logo-container {
            text-align: center;
            margin-top: 20px;
        }

        .logo-container img {
            width: 100px;
            height: 100px;
        }

        .logo-container p {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
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
                <h2>MENGATUR LOKASI BARANG</h2>
                <div class="form-content">
                    <div class="form-group">
                        <label for="id-barang">ID Barang</label>
                        <input type="text" id="id-barang" name="id-barang" value="12345" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama-barang">Nama Barang</label>
                        <input type="text" id="nama-barang" name="nama-barang" value="Buku Pelajaran" readonly>
                    </div>
                    <div class="form-group">
                        <label for="gudang">Gudang</label>
                        <input type="text" id="gudang" name="gudang" value="H">
                    </div>
                    <div class="logo-container">
                        <img src="denah_gudang.png" alt="Denah Gudang">
                        <p>Denah Gudang</p>
                    </div>
                    <button class="btn-submit">Input</button>
                </div>
            </div>
            <div class="back-to-home">
                <u><a href="#">Back to Home</a></u>
            </div>
        </div>
    </div>
</body>
</html>
