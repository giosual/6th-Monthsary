<?php
// Start session to check if user is logged in
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page if not logged in
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Letter</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="background">
    <div class="form-container">
      <h2>My Dearest,</h2>
      <p style="text-align: left; text-indent: 40px;">
        Alam ko, sobrang sama ng loob mo, but I am really hoping that you'll appreciate this work of mine. This is not just a present or an apology gift for disappointing you. This present is from the
        bottom of my loving heart, where you <br>find love, we find love.
      </p>
      <p style="text-align: left; text-indent: 40px;">
        I love you so much that I have nothing to say but "I love you." I love you so deeply that I would die for you. I love you so much that I would change for you. But this act <br>of change is not because of "love" itself, but because of you.
      </p>
      <p style="text-align: left; text-indent: 40px;">
        I love you in every language I know.
      </p>
      <p style="text-align: left; text-indent: 40px;">
        Mahal kita. Kaluguran daka.
      </p>
      <p style="text-align: right; text-indent: 40px;">
        Always yours, <br>
        <b>Carl Joshua</b>
      </p>

      <div class="extra-links" style="text-align: center; margin-top: 20px;">
        <b>Are you done reading my letter, baby?</b>
        <a href="logout.php">Yes</a> <!-- Logout link -->
      </div>
    </div>
  </div>
</body>
</html>
