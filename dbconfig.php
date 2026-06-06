<?php
$servername = "sql212.infinityfree.com";  // Your InfinityFree MySQL Host
$username = "if0_40281999";              // Your MySQL Username
$password = "GZY5EqErwAj";              // Your MySQL Password
$dbname = "if0_40281999_workshopdb";           // Your Database Name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
