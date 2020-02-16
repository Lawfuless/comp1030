<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./.env.php');
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
  // Step 2: (20 points) Update the existing 'supers' row in the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  var_dump($_POST);
  $sql = "UPDATE supers SET
            first_name = '{$_POST['first_name']}',
            last_name = '{$_POST['last_name']}',
            date_of_birth = '{$_POST['date_of_birth']}',
            alias = '{$_POST['alias']}',
            active = '{$_POST['active']}',
            hero = '{$_POST['hero']}'
          WHERE id = {$_POST['id']}";
  echo $sql;
  $res = mysqli_query($conn, $sql);
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();

  if ($res) {
    $_SESSION['notification'] = "The super was updated successfully.";
  } else {
    $_SESSION['notification'] = "There was an error updating the super: " . mysqli_error($conn);
  }
  header("Location: ./notification.php");
  die;

  // TOTAL POINTS POSSIBLE: 38
?>