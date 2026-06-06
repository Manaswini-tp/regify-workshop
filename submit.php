<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST['phone']) . "</p>";
    echo "<p><strong>Department:</strong> " . htmlspecialchars($_POST['dept']) . "</p>";
    echo "<p><strong>Year:</strong> " . htmlspecialchars($_POST['year']) . "</p>";
    echo "<p><strong>Workshop Topic:</strong> " . htmlspecialchars($_POST['topic']) . "</p>";
}
?>
