<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate user (check credentials in the database)
    $servername = "localhost";
    $dbusername = "your_username";
    $dbpassword = "your_password";
    $dbname = "database_name depende kay hans";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username; // Store username in session for further use
        header("Location: display_data.php"); // Redirect to display page
    } else {
        echo "Invalid username or password";
    }

    $conn->close();
}
?>
