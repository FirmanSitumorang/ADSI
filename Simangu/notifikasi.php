<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANGU - Confirmation</title>
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
        flex-grow: 1;
        background: url('bg gudang.jpg') no-repeat center center/cover;
        background-size: cover;
        background-position: center;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .confirmation-section {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 600px;
        text-align: center;
    }

    .confirmation-section h2 {
        margin-bottom: 20px;
    }

    .back-link {
        display: block;
        margin-top: 20px;
        color: #003366;
        text-decoration: none;
        text-align: center;
    }

    .back-link:hover {
        text-decoration: underline;
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
                <li><a href="about.php"> About</a></li>
            </ul>
            <a href="logout.php" class="logout"> Log out</a>
        </div>
        <div class="main-content">
            <div class="confirmation-section">
                <h2>Penilaian telah Terkirim!</h2>
                <a href="rating.html" class="back-link">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
