<?php
include "database.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        $_SESSION['username'] = $row['username'];
        header("Location: registration.php");
        exit();
    }
    else {
        header("Location: login.php?error=Wrong username or password!");
        exit();
    }
}
?>