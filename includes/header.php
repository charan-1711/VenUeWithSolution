       <?php
include 'config.php';
$admin = new Admin();
// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $uid = $_SESSION['user_id'];
    $stmt = $admin->ret("SELECT * FROM `users` WHERE `user_id`='$uid'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
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
                        <a href="userProfile.php"><?php echo $row['username']; ?></a>
                        <a href="controller/u_logout.php" class="logBtn">Log Out</a>
                     <?php else: ?>
                        <!-- <li><a href="services.html">SERVICES</a></li> -->
                        <a href="index.php">HOME</a>
                        <a href="venues.php">VENUES</a>
                        <a href="login.php">LOGIN</a>
                        <a href="signup.php">SIGN UP</a>
                    <?php endif; ?>

                </div>
                <!-- <div class="search">
                    <input class="srch" type="search" name="" placeholder ="Type To text">
                    <a href="#"><button class="button">SEARCH</button></a>
                </div> -->
           </div>