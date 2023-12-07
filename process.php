<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        echo "Passwords match!";    
    } else {
        echo "Passwords do not match!";
    }
}
?>