<?php
include 'config.php';

// Start session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
    // Changed single quotes to backticks for table and column names
    $stmt = "SELECT * FROM `users` WHERE `user_id`='$uid'";
    $result = mysqli_query($conn, $stmt);
    // Changed fetch method to associative array
    $row = mysqli_fetch_assoc($result);
}
?>  

<div class="navbar">
    <div class="icon">
        <h2 class="logo">VenUWithSoln</h2>
    </div>

    <div class="menu">
        <?php if (isset($row['user_id'])): ?>
            <a href="index.php">HOME</a>
            <a href="venues.php">VENUES</a>
            <a href="book.php">BOOK</a>
            <?php if($row['u_email'] === 'admin@admin.com') {?>
                <a href="details.php">BOOKING DETAILS</a>
            <?php } ?>
            <button class="btn"><a href="controller/u_logout.php">LOG OUT</a></button>
            <h1 style="color: #74;">Welcome <?php echo $row['username']; ?></h1>
                </style>
        <?php else: ?>
            <a href="index.php">HOME</a>
            <a href="venueslogin.php">VENUES</a>
            <a href="login.php">BOOK</a>
            <button class="btn"><a href="login.php">LOG IN</a></button>
            <button class="btn"><a href="signup.php">SIGNUP</a></button>
        <?php endif; ?>
    </div>
</div>
