<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venue With Solution</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/details.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Micro+5+Charted&display=swap" rel="stylesheet">
</head> 
<body class="back">
    <div class="main">
    <?php include 'includes/header.php' ?>
<?php

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    // Get user ID from session
    $uid = $_SESSION['user_id'];

    // Fetch user data
    $stmt = "SELECT * FROM `users` WHERE `user_id`='$uid'";
    $result = mysqli_query($conn, $stmt);

    // Check if user exists and has admin privileges
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Check if user has admin privileges
        if ($row['u_email'] === 'admin@admin.com') {
            // Query to fetch bookings
            $bookings_query = "SELECT * FROM bookings";
            $bookings_result = mysqli_query($conn, $bookings_query);

            // Check if query executed successfully
            if ($bookings_result) {
                // Check if there are any bookings
                if (mysqli_num_rows($bookings_result) > 0) {
                    ?>
                    <div class="tbl">
                    <table>
                        <tr>
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>Event</th>
                            <th class="thdate">Date</th>
                            <th>Time</th>
                            <th>Guests</th>
                        </tr>

                        <?php
                        // Output each booking
                        while ($booking_row = mysqli_fetch_assoc($bookings_result)) {
                            ?>
                            <tr>  
                                <td><?php echo htmlspecialchars($booking_row['name']); ?></td>
                                <td><?php echo htmlspecialchars($booking_row['phone']); ?></td>
                                <td><?php echo htmlspecialchars($booking_row['event']); ?></td>
                                <td class="thdate"><?php echo htmlspecialchars($booking_row['date']); ?></td>
                                <td><?php echo htmlspecialchars($booking_row['time']); ?></td>
                                <td><?php echo htmlspecialchars($booking_row['guests']); ?></td>   
                                <td class="dlt">
                                        <a href='controller/deletebackend.php?delete=<?php echo $booking_row['bookingid']; ?>' class='dltbtn' onclick='return confirm("Are you sure you want to delete this booking?");'>Delete</a>
                                </td> 
                                <td class="mod">       
                                        <a href='controller/deletebackend.php?modify=<?php echo $booking_row['bookingid']; ?>' class='dltbtn' onclick='return confirm("Are you sure you want to modify this booking?");'>Modify</a>
                                </td>
                               </tr>    
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                            <?php
                        } else {
                            echo "No bookings found.";
                        }
                    } else {
                        // Handle query execution error
                        echo "Error: " . mysqli_error($conn);
                    }
                } else {
                    echo "You do not have permission to view this page.";
                }
            } else {
                echo "User not found.";
            }
        } else {
            echo "You are not logged in.";
        }
        ?>
    </div>
</body>
</html>
