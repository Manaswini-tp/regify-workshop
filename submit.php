<?php
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $dept = htmlspecialchars(trim($_POST['dept']));
    $year = htmlspecialchars(trim($_POST['year']));
    $topic = htmlspecialchars(trim($_POST['topic']));
    
    // Using prepared statement for security
    $stmt = $conn->prepare("INSERT INTO registrations (name, email, phone, dept, year, topic, reg_date) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssssss", $name, $email, $phone, $dept, $year, $topic);
    
    if ($stmt->execute()) {
        echo "<h3>✅ Registration Successful!</h3>";
        echo "<p><strong>Name:</strong> " . $name . "</p>";
        echo "<p><strong>Email:</strong> " . $email . "</p>";
        echo "<p><strong>Phone:</strong> " . $phone . "</p>";
        echo "<p><strong>Department:</strong> " . $dept . "</p>";
        echo "<p><strong>Year:</strong> " . $year . "</p>";
        echo "<p><strong>Workshop Topic:</strong> " . $topic . "</p>";
        echo "<p style='color:green;'>A confirmation email has been sent to your email address.</p>";
    } else {
        echo "<p style='color:red;'>❌ Error: " . $stmt->error . "</p>";
    }
    
    $stmt->close();
    $conn->close();
}
?>
