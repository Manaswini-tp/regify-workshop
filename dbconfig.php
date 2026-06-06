<?php
$servername = "your_host"; // Your InfinityFree MySQL Host
$username = "your_username"; // Your MySQL Username
$password = "your_password";  // Your MySQL Password
$dbname = "your_dbname"; // Your Database Name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
