<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venue With Solution</title>
  <link rel="stylesheet" href="css/stylebook.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body class="back">
  <div class="main">
       <?php include 'includes/header.php' ?>
  </div> 
  <div class="bookcontainer">
    <h1>Book Your Venue</h1>
    <form action="controller/bookbackend.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required><br>
      <label for="event">Event Type:</label>
      <select id="event" name="event" required>
        <option value="">Select event type</option>
        <option value="Wedding">Wedding</option>
        <option value="Reception">Reception</option>
        <option value="Engagement">Engagement</option>
        <option value="Conference">Conference</option>
        <option value="Babyshower">Baby Shower</option>
        <option value="Party">Party</option>
        <option value="Workshop">Workshop</option>
      </select>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required><br>
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>
      <label for="guests">Number of Guests:</label>
      <input type="number" id="guests" name="guests" required><br>
      <button type="submit" class="button">Book Venue</a></button><br>
    </form>
  </div>
</body>
</html>

