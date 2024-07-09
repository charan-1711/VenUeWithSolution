<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <link rel="stylesheet" href="css/login.css"> 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body class="back">
<div class="main">
     <?php include 'includes/header.php' ?>
  </div>
  <div class="login-container">
    <h2>Sign up</h2>
    <form action="controller/signupbackend.php" method="post">
        <label for="">Enter your email</label>
        <input type="email" name="email" placeholder="email" required>
        <label for="">Enter your username</label>
        <input type="text" name="username" placeholder="username" required>
        <label for="">Enter your password</label>
       <input type="password" name="password" placeholder="Password" required>
       <button class="btn"><a href="login.php">Already have an Account</a></button>
      <input type="submit" class="btn" value="Signup">
    </form>
  </div>
</body>
</html>