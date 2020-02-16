<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('./.env.php'); 
  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB')); 
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

$result = mysqli_query($conn, "SELECT * FROM supers");
$row = mysqli_fetch_assoc($result); 
var_dump($row);


?>

<!-- Step 3: (2 points) Include your header here -->
<?php
  include('./_header.php');
?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
                <nav>
                    <ul>
                    <li><a href="./index.php" title="Go to Home Page">Home</a></li>
                </ul>
                </nav>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="./update.php" method = "post">
            <input type = "hidden" name="id" value=<?php echo $row['id'];?>>
            <div>
                <label>First Name:</label><br>
                <input name="first_name" value="<?php echo $row['first_name'];?>">
            </div>
            <div>
                <label>Last Name:</label><br>
                <input name="last_name" value="<?php echo $row['last_name'];?>">
            </div>
            <div>
                <label>Date of Birth:</label><br>
                <input type="date" name = "date_of_birth" value="<?php echo $row['date_of_birth'];?>">
            </div>
            <div>
                <label>Alias:</label><br>
                <input name="alias"  value="<?php echo $row['alias'];?>">
            </div>
            <div>
                <label>Active:</label><br>
                <input name="active"  value="<?php echo $row['active'];?>">
            </div>
            <div>
                <label>Hero?:</label><br>
                <input name="hero"  value="<?php echo $row['hero'];?>">
            </div>
            <button type= "submit">Update</button>

<!-- Step 8: (2 points) Include your footer here -->

<?php
  include('./_footer.php');
?>

<!-- TOTAL POINTS POSSIBLE: 44 -->