<?php
require '../config.php';

// Signup form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Check if the email already exists in the database
    $stmt_check_email = "SELECT * FROM `users` WHERE `u_email`='$email'";
    $result_check_email = mysqli_query($conn, $stmt_check_email);
    
    if (mysqli_num_rows($result_check_email) > 0) {
        // Email already exists
        echo "<script>alert('Email already exists'); window.location='../signup.php'; </script>";
        exit(); // Terminate script execution after redirecting
    } else {
        // Insert new user into the database
        $stmt_insert_user = "INSERT INTO `users`(`u_email`, `password`) VALUES ('$email','$password')";
        if (mysqli_query($conn, $stmt_insert_user)) {
            // Signup successful
            echo "<script>alert('User added successfully'); window.location='../login.php'; </script>";
            exit(); // Terminate script execution after redirecting
        } else {
            // Error in query execution
            echo "Error: " . $stmt_insert_user . "<br>" . mysqli_error($conn);
            exit(); // Terminate script execution
        }
    }
} else {
    // Redirect user to the signup page if the required fields are not provided
    header('Location: ' . BASE_URL . 'signup.php');
    exit();
}

mysqli_close($conn);
?>
