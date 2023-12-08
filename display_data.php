<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Retrieve patient data based on the logged-in user
$servername = "localhost";
$dbusername = "your_username";
$dbpassword = "your_password";
$dbname = "database name depende kay hans";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM patient_data WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display patient data
    echo "<h1>Patient Data</h1>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Medicine</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['age'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['blood_group'] . "</td>
                <td>" . $row['medicine'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No patient data found";
}

$conn->close();
?>
