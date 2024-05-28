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
            background: url('bg_gudang.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .modal {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .modal-content h3 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .modal-content .button-group {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .modal-content .button-group a {
            background-color: #0a387e;
            border: none;
            padding: 10px 40px;
            border-radius: 50px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            text-align: center;
            transition: background 0.3s ease;
            display: inline-block;
        }

        .modal-content .button-group a:hover {
            background-color: #315a9d;
        }

        .modal-content .button-group a:last-child {
            background-color: #0a387e;
        }

        .modal-content .button-group a:last-child:hover {
            background-color: #c03b3b;
        }

        .hidden {
            display: none;
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
            <a href="#logoutModal" class="logout"> Log out</a>
        </div>
        <div class="main-content">
            <div id="logoutModal" class="modal">
                <div class="modal-content">
                    <h3>Keluar dari Simangu</h3>
                    <div class="button-group">
                        <a href="welcome.php" class="button">Batalkan</a>
                        <a href="login.php" class="button">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
