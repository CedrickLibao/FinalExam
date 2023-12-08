<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = []; 

    $requiredFields = ['name', 'password', 'confirm_password', 'age', 'birthday', 'address' , 'contact_No.' ]; //required fields dito

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = ucfirst($field) . " is required";
        }
    }

 
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // All validations passed, proceed with data processing or database insertion
        //dito yung mga validation sa mysql kung na insert na ba or may kulang ganon. 
        echo "Form data is valid!";
        // You can add database insertion or other processing code here
    }
}
?>
