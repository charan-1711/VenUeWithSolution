<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body class="back">
<div class="main">
     <?php include 'includes/header.php' ?>
  </div>
  <div class="login-container">
    <h2>Login</h2>
    <form action="controller\loginbackend.php" method="post">
      <input type="email" name="l_email" placeholder="email" required>
      <input type="password" name="l_password" placeholder="Password" required>
      <input type="submit" name="l_user" value="Login">
      <button class="btn"><a href="signup.php">New user</button></a> 
    </form>
  </div>
</body>
</html>