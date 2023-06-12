<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./contact.css">
  <title>Contact</title>
  <link rel="icon" href="./images/Logo.png">
  <script>
    function showNotification() {
      alert("Data sent to the database!");
    }
  </script>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
    <nav>
      <a href="./index.php">Home</a>
      <a href="./about.html">About</a>
      <a href="./contact.php">Contact</a>
    </nav>
  </header>
  <main>
    <div class="form">
      <p>Fill out the form below to get in touch with us:</p>
      <form action="" method="post" onsubmit="showNotification()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>
  </main>
  <footer>
    <p>&copy; 2023 Contrivance&trade; All Rights Reserved</p>
  </footer>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //connect to server
  include('./server/connection.php');

  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Insert the form data into the database
  $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

  if ($conn->query($sql) === TRUE) {
      // Data successfully inserted
      echo '<script>alert("Data sent to the database!");</script>';
  } else {
      // Error inserting data
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
} ?>
