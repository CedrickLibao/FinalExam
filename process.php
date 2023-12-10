<?php
include "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $factor1 = $factor2 = $factor3 = $factor4 = $factor5 = $factor6 = $factor7 = $factor8 = $factor9 = $factor10 = "NO";
    
    $name = validate($_POST['name']);
    $age = validate($_POST['age']);
    $birthday = validate($_POST['birthday']);
    $address = validate($_POST['address']);
    $contact = validate($_POST['contact']);
    $lmp  = validate($_POST['lmp']);
    $ldc = validate($_POST['ldc']);
    $aog = validate($_POST['aog']);
    $gp = validate($_POST['gp']);
    if (isset($_POST['factor1'])) {
        $factor1 = validate($_POST['factor1']);
    }
    if (isset($_POST['factor2'])) {
        $factor2 = validate($_POST['factor2']);
    }
    if (isset($_POST['factor3'])) {
        $factor3 = validate($_POST['factor3']);
    }
    if (isset($_POST['factor4'])) {
        $factor4 = validate($_POST['factor4']);
    }
    if (isset($_POST['factor5'])) {
        $factor5 = validate($_POST['factor5']);
    }
    if (isset($_POST['factor6'])) {
        $factor6 = validate($_POST['factor6']);
    }
    if (isset($_POST['factor7'])) {
        $factor7 = validate($_POST['factor7']);
    }
    if (isset($_POST['factor8'])) {
        $factor8 = validate($_POST['factor8']);
    }
    if (isset($_POST['factor9'])) {
        $factor9 = validate($_POST['factor9']);
    }
    if (isset($_POST['factor10'])) {
        $factor10 = validate($_POST['factor10']);
    }
    $risk  = validate($_POST['risk']);
    $asses = validate($_POST['asses']);


    $sql = "INSERT INTO patients (name, age, birthday, address, contact, lmp, ldc, aog, gp, factor1, factor2, factor3, factor4, factor5, factor6, factor7, factor8, factor9, factor10, risk, assessedBy)
    VALUES ('$name', '$age', '$birthday', '$address', '$contact', '$lmp', '$ldc', '$aog', '$gp', '$factor1', '$factor2', '$factor3', '$factor4', '$factor5', '$factor6', '$factor7', '$factor8', '$factor9', '$factor10', '$risk', '$asses');";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: registration.php?message=Registered Successfully!");
        exit();
    } else {
        $conn->close();
        header("Location: registration.php?message=" . "Error: " . $sql . "<br>" . $conn->error);
        exit();
    }
}
?>