<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./.env.php');
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));

  var_dump($_GET);
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "DELETE FROM supers WHERE id = {$_GET['id']}";
  echo $sql;
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  $res = mysqli_query($conn, $sql);
session_start();

if ($res) {
  $_SESSION['notification'] = "The new super was deleted successfully.";
} else {
  $_SESSION['notification'] = "There was an error deleting the super: " . mysqli_error($conn);
}
header("Location: ./notification.php");
die;
  // TOTAL POINTS POSSIBLE: 38
?>