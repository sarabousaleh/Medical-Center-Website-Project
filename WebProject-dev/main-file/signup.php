<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medikal_users_db";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$passwordError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $username = $conn->real_escape_string($_POST['username']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirmPassword = $conn->real_escape_string($_POST['confirm-password']);

    if ($password !== $confirmPassword) {
        $passwordError = 'Passwords do not match.';
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insertQuery = $conn->prepare("INSERT INTO users (name, username, dob, email, password) VALUES (?, ?, ?, ?, ?)");
        $insertQuery->bind_param("sssss", $name, $username, $dob, $email, $hashedPassword);

        if ($insertQuery->execute()) {
            $insertQuery->close();
            $conn->close();
            echo "<script>window.location.href='login.php';</script>";
            exit();
        } else {
            echo "Error: " . $insertQuery->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Medikal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("med.jpg");
        }

        .signup-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            color: #333;
        }

        h1 {
            margin-top: 20px;
            font-size: 2.5em;
            white-space: nowrap; 
            color:#000000;
        }

        .form-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }

        #signup-form {
            display: flex;
            flex-direction: column;
        }

        #signup-form label {
            font-weight: bold;
            margin-top: 15px;
        }

        #signup-form input[type="text"],
        #signup-form input[type="email"],
        #signup-form input[type="password"],
        #signup-form input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        #signup-form small {
            display: block;
            margin-top: 5px;
            color: #666;
            font-size: 0.8em;
        }

        #signup-form button {
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-image: linear-gradient(to right, #007fe0, #034d86);
            color: white;
            cursor: pointer;
            transition: opacity 0.1s ease;
            font-size: 1.4em;
        }

        #signup-form button:hover {
            opacity: 0.9;
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
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="logo-container">
            <img src="logo.png" style="width: 8cm; height: auto; position: relative; left: 30px;">
        </div>
        <h1 style="position: relative; right: 3.6cm;">Join a thriving community at Medikal.</h1>
        <div class="form-container">
            <form id="signup-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="name" style="opacity: 60%;">Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe">
                
                <label for="username" style="opacity: 60%;">Username</label>
                <input type="text" id="username" name="username" required placeholder="johndoe23">
                
                <label for="dob" style="opacity: 60%;">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
                
                <label for="email" style="opacity: 60%;">Email</label>
                <input type="email" id="email" name="email" required placeholder="johndoe@example.com">
                
                <label for="password" style="opacity: 60%;">Password</label>
                <input type="password" id="password" name="password" required placeholder="*******">
                <small>Password must be 8 - 12 characters</small>

                <label for="confirm-password" style="opacity: 60%;">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required placeholder="*******">

                <?php if (!empty($passwordError)): ?>
                    <small style="color: red;"><?php echo $passwordError; ?></small>
                <?php endif; ?>

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
