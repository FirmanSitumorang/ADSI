<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANGU - Rating</title>
<style>
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
            background-color: #e04444;
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

    .rating-section {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        width: 100%;
        max-width: 600px;
        text-align: center;
    }

    .rating-section h2 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: vertical;
        height: 100px;
    }

    .form-row {
        display: flex;
        justify-content: space-between;
    }

    .form-row .form-group {
        width: 48%;
    }

    .rating-stars {
        font-size: 24px;
        cursor: pointer;
        display: flex;
        justify-content: center;
    }

    .rating-stars span {
        margin-right: 5px;
        color: #ccc;
    }

    .rating-stars span:hover,
    .rating-stars span:hover ~ span {
        color: #ffcc00;
    }

    .submit-button {
        background-color: #003366;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 16px;
        display: block;
        margin: 0 auto;
    }

    .submit-button a{
        color: #ffffff;
        text-decoration: none;
    }

    .submit-button:hover {
        background-color: #005b99;
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
                <li><a href="#"> About</a></li>
            </ul>
            <a href="logout.php" class="logout"></i> Log out</a>
        </div>
        <div class="main-content">
            <div class="rating-section">
                <h2>Rating</h2>
                <form action="#">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="kode-barang">Kode Barang</label>
                            <input type="text" id="kode-barang" name="kode-barang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="barang">Barang</label>
                        <input type="text" id="barang" name="barang">
                    </div>
                    <div class="form-group">
                        <div class="rating-stars">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea id="pesan" name="pesan"></textarea>
                    </div>
                    <button type="submit"  class="submit-button"><a href="notifikasi.php">Kirim</a></button>
                </form>
                <a href="#" class="back-link">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
