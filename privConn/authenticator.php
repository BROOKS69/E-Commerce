<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'e-commerce';

// Connect to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user's input from the JavaScript request
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the user's input
if (empty($username) || empty($password)) {
  echo 'Please enter both username and password';
  exit;
}

// Query the database to authenticate the user
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // Login successful, set session variables
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['logged_in'] = true;

  // Redirect to index.php
  header('Location: index.php');
  exit;
} else {
  echo 'Invalid username or password';
}

// Close the database connection
$conn->close();

?>