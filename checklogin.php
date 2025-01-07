<?php
include 'db_connect.php'; // Include the database connection file
session_start(); // Start a session to store user data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch data from the form
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare a SQL statement to find the user
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            // Store user data in session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];

            // Redirect to the home page or user dashboard
            header("Location: index.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Invalid password.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>No account found with that email.</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
