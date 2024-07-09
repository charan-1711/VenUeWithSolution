<?php
// Start session
session_start();

// Check if delete parameter is set in the URL
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    // Include database configuration
    include '../config.php';
    
    // SQL injection prevention: Use prepared statement
    $sql = "DELETE FROM bookings WHERE bookingid=$id";
    
    // Execute the statement
    if (mysqli_query($conn, $sql) == true) {
        // Redirect back to the details page after deleting the booking
        header("Location: ../details.php");
        exit();
    } else {
        // Error handling if deletion fails
        echo "Error deleting record: " . mysqli_error($conn);
    }
    
    
    // Close connection
    mysqli_close($conn);
}
?>
