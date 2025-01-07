<?php
include 'db_connect.php'; // Include database connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first']);
    $last_name = trim($_POST['last']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['pass']), PASSWORD_DEFAULT);

    // SQL Query to insert data into the users table
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

    if ($stmt->execute()) {
        header("Location: login.php"); // Replace login.php with your login page URL
        exit(); 
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
