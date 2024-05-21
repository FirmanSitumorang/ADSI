<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMANGU</title>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body, html {
    height: 100%;
    width: 100%;
}

.container {
    display: flex;
    height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #003366;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
}

.sidebar .logo img {
    width: 80%;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    width: 100%;
    text-align: center;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    text-decoration: none;
    color: #ffffff;
    font-size: 18px;
    display: block;
    padding: 10px 0;
}

.sidebar ul li a:hover {
    background-color: #005b99;
}

.logout-button {
    margin-top: auto;
    margin-bottom: 20px;
    padding: 10px 20px;
    background-color: #cc0000;
    color: #ffffff;
    border: none;
    cursor: pointer;
    font-size: 16px;
}

.logout-button:hover {
    background-color: #ff1a1a;
}

.main-content {
    flex-grow: 1;
    background-image: url('background.jpg');
    background-size: cover;
    background-position: center;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-section {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 800px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.profile-pic {
    text-align: center;
    flex: 1;
}

.profile-pic img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.profile-info {
    text-align: left;
    font-size: 14px;
}

.profile-form {
    flex: 2;
    padding-left: 40px;
}

.profile-form h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.update-button {
    background-color: #003366;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
}

.update-button:hover {
    background-color: #005b99;
}

</style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="logo.png" alt="SIMANGU Logo">
            </div>
            <ul>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="notif2.php">Notification</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <button class="logout-button">Log out</button>
        </div>
        <div class="main-content">
            <div class="profile-section">
                <div class="profile-pic">
                    <img src="profile-pic.jpg" alt="Profile Picture">
                    <div class="profile-info">
                        <p>Name: ........</p>
                        <p>Phone Number: ........</p>
                        <p>Email: ........</p>
                        <p>City: ........</p>
                        <p>State/Country: ........</p>
                        <p>Postcode: ........</p>
                        <p>Country: ........</p>
                    </div>
                </div>
                <div class="profile-form">
                    <h2>Profile</h2>
                    <form action="#">
                        <div class="form-group">
                            <label for="first-name">First Name</label>
                            <input type="text" id="first-name" name="first-name">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input type="text" id="last-name" name="last-name">
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Phone Number</label>
                            <input type="text" id="phone-number" name="phone-number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <label for="state">State/County</label>
                            <input type="text" id="state" name="state">
                        </div>
                        <div class="form-group">
                            <label for="postcode">Postcode</label>
                            <input type="text" id="postcode" name="postcode">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" name="country">
                        </div>
                        <button type="submit" class="update-button">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
