<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venue With Solution</title>
  <link rel="stylesheet" href="stylebook.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="css/header.css">
</head>
<body class="back">
  <div class="main">
       <?php include 'includes/header.php' ?>
  <div class="container">
    <h1>Book Your Venue</h1>
    <form action="submit.html" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
      <label for="event">Event Type:</label>
      <select id="event" name="event" required>
        <option value="">Select event type</option>
        <option value="Wedding">Wedding</option>
        <option value="Reception">Workshop</option>
        <option value="Engagement">Workshop</option>
        <option value="Conference">Conference</option>
        <option value="Party">Party</option>
        <option value="Workshop">Workshop</option>
        <!-- Add more event types as needed -->
      </select>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>
      <label for="guests">Number of Guests:</label>
      <input type="number" id="guests" name="guests" required>
      <button type="submit">Book Venue</button>
    </form>
  </div>
  </div>
</body>
</html>

