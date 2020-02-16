<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./.env.php');
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "INSERT INTO supers (
    first_name,
    last_name,
    date_of_birth,
    alias,
    active,
    hero
) VALUES (
    '{$_POST['first_name']}',
    '{$_POST['last_name']}',
    '{$_POST['date_of_birth']}',
    '{$_POST['alias']}',
    '{$_POST['active']}',
    '{$_POST['hero']}'
)";

echo $sql;

$conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));

var_dump($_POST);

$res = mysqli_query($conn, $sql);

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();

  if ($res) {
    $_SESSION['notification'] = "The new super was created successfully.";
  } else {
    $_SESSION['notification'] = "There was an error creating the super: " . mysqli_error($conn);
  }
  header("Location: ./notification.php");
  die;


  // TOTAL POINTS POSSIBLE: 35
?>