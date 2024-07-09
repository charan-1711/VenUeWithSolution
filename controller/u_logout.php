<?php
session_start(); // Start the session
include '../config.php';

// Destroy the session
session_destroy();

// Unset the user_id session variable
unset($_SESSION['user_id']);

// Redirect to the index.php page after logout
echo "<script>alert('Logout successful'); window.location='../index.php'; </script>";
?>
