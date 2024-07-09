<?php
require '../config.php';

// Start session (assuming you're using sessions)
session_start();

// Login form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uemail = $_POST["l_email"];
    $password = $_POST["l_password"];

    // Check if username and password match in the database
    $sql = "SELECT * FROM users WHERE `u_email`='$uemail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User found in the database
        $row = mysqli_fetch_assoc($result);
        $db_pass = $row['password']; // Fetch password from the database

        // Check if the provided password matches the one stored in the database
        if ($password === $db_pass) {
            $uid = $row['user_id']; // Get user ID
            $_SESSION['user_id'] = $uid; // Set user ID in session
            
            // Redirect to index page upon successful login
            echo "<script>alert('Login successful'); window.location='../index.php'</script>";
            exit(); // Exit to prevent further execution
        } else {
            // Password incorrect
            echo "<script>alert('Email or password incorrect!'); window.location='../login.php'</script>";
            exit(); // Exit to prevent further execution
        }
    } else {
        // No user found with the given email
        echo "<script>alert('Email or password incorrect!'); window.location='../login.php'</script>";
        exit(); // Exit to prevent further execution
    }
} else {
    // Redirect to the login page if form fields are not submitted
    echo "<script>alert('Enter input fields'); window.location='../login.php'</script>";
    exit(); // Exit to prevent further execution
}

mysqli_close($conn);
?>
