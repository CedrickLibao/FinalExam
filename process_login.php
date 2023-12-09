<?php
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

    $admin = "admin";
    $pass = "password";

    if ($username == $admin && $password == $pass) {
        header("Location: registration.php");
        exit();
    }
    else {
        if ($username != $admin){
            header("Location: login.php?error=Username does not exist!");
            exit();
        }
        else if ($password != $pass){
            header("Location: login.php?error=Wrong password!");
            exit();
        }
        else {
            header("Location: login.php?error=Wrong username or password!");
            exit();
        }
    }
}
?>