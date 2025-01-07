<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['user']);
    $email = trim($_POST['E-mail']);
    $mobile = trim($_POST['Mobile']);
    $comments = trim($_POST['Comments']);

    // Validate inputs
    if (empty($username) || empty($email) || empty($comments)) {
        die("All fields except mobile are required.");
    }

    // Insert into the database
    $sql = "INSERT INTO reviews (username, email, mobile, comments) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $mobile, $comments);

    if ($stmt->execute()) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
