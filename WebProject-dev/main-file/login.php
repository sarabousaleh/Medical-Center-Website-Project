<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Medikal</title>
    <style>
        body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    height: 100%;
    
}

.login-section {
    flex: 0 0 30%;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: center;
    background-color: #fff;
    text-align: left;
}

.logo-container {
    margin-bottom: 20px;
}

h1 {
    margin-bottom: 20px;
    color: #333;
    font-size: 3.5em;
    
}

.login-form {
    width: 100%;
}

.login-form input {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    
    box-sizing: border-box;
}

.login-form button {
    width: calc(100% - 20px);
    padding: 10px;
    border: none;
    background-color: #007FE0;
    color: white;
    cursor: pointer;
    margin-bottom: 10px;
    border-radius: 10px;
    font-size: 1.4em;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2); 
    text-shadow: 0 0 8px rgba(255,255,255,0.5); 
    transition: background-color 0.3s;
}

.login-form button:hover {
    background-color: #034d86;
    box-shadow: 0 0 15px rgba(0,0,0,0.3); 
}
.signup-section {
    text-align: center;
}

.signup-section p {
    margin-bottom: 10px;
}

.image-section {
    flex: 1;
    background-image: url('img-6.jpg'); 
    background-size: cover;
    background-position: center;
}

.signup-section button {
    width: 50%;
    transition: all 0.3s;
    font-size: 1.1em;
    position: relative;
    right: 3px;
}
p{
    opacity: 70%;
    color: #04375f;
}
.signup-section button:hover {
    transform: translateY(-3px); 
}
.line-container {
    width: 100%; 
    padding: 0; 
    text-align: center;
    position: relative;
    right: 0.65em; 
}

.separator-line {
    margin: 2px 0; 
    border: 0;
    height: 1px;
    background-color: #3e3b3b; 
    display: inline-block;
    width: calc(100% - 40px);
}

    </style>

</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="logo-container">
                <img src="logo.png" style="width: 8cm; height: auto;">
            </div>
            <h1>Welcome to Medikal</h1>
            <form class="login-form" method="post" action="login.php">
    <p>Username or Email</p>
    <input type="text" name="login" placeholder="Username or Email" required style="border-radius: 10px;">
    <p>Password</p>
    <input type="password" name="password" placeholder="******" required style="border-radius: 10px;">
    
    <button type="submit" style="margin-top: 9px;">Login</button>
    <div class="line-container">
        <hr class="separator-line" />
    </div>
    <div class="signup-section">
        <p>Don't have an account?</p>
        <a href="signup.php"><button type="button">Sign Up Here</button></a>
    </div>
</form>

        </div>
        <div class="image-section">
        </div>
    </div>
</body>
</html>
<?php
session_start();
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medikal_users_db";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $conn->real_escape_string($_POST['login']); // login can be either username or email
    $password = $conn->real_escape_string($_POST['password']);

    $query = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $login, $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit();
        } else {
            echo "<div style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Error! Please try to re-enter your email and password.</div>";
        }
    } else {
        echo "<div style='position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Error! Please try to re-enter your email and password.</div>";
    }
    $stmt->close();
}

$conn->close();
?>
