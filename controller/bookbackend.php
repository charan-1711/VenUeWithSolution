<?php
session_start(); // Start the session

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];

    // Connect to your database (assuming you're using MySQL)
    include '../config.php';

    // Prepare SQL query to insert data into database
    $sql = "INSERT INTO bookings (`name`,`phone`, `event`, `date`, `time`, `guests`) VALUES ('$name','$phone', '$event', '$date', '$time', '$guests')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Booking successful!";
        echo "<script>location.href='../success.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}

?>