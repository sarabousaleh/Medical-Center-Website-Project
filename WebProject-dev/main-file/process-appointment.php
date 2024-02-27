<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection code here

    // Validate and sanitize input data
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST["phone"]);
    $department = htmlspecialchars($_POST["select1"]);
    $date = htmlspecialchars($_POST["datepicker"]);
    $message = htmlspecialchars($_POST["message"]);

    // Your database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medikal_users_db";

    try {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }

        // SQL query using prepared statement
        $sql = "INSERT INTO appointments (name, email, phone, department, date, message) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $phone, $department, $date, $message);

        if ($stmt->execute()) {
            // Close the database connection
            $stmt->close();
            $conn->close();

            // Display a JavaScript alert
            echo "<script>alert('Thank you, $name, for scheduling an appointment. We will contact you shortly.');</script>";
        } else {
            throw new Exception("Error executing the query: " . $stmt->error);
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
