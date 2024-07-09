<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["u_email"])) {
    header("Location: details.php");
    exit();
}

// Check if the logged-in user is admin
if ($_SESSION["u_email"] !== "admin@admin.com") {
    echo "You are not authorized to view this page.";
    exit();
}
include 'config.php';
// Fetch all records of logged-in users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Display records
    echo "<h2>Users</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

mysqli_close($conn);
?>