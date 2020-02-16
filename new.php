<!-- Step 1: (2 points) Include your header here -->
<?php
  include('./_header.php');
?>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<!DOCTYPE html>
<html>
<nav>
    <ul>
      <li><a href="./index.php" title="Go to Home Page">Home</a></li>
  </ul>
</nav>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<form action="./insert.php" method="post">
      <div>
        <label>First Name:</label>
        <input name="first_name">
      </div>

      <div>
        <label>Last Name:</label>
        <input name="last_name">
      </div>

      <div>
        <label>Date of Birth:</label>
        <input name="date_of_birth" type = date>
      </div>

      <div>
        <label>Alias:</label>
        <input name="alias">
      </div>

      <div>
        <label>Are they active? Y/N:</label>
        <input name="active">
      </div>

      <div>
        <label>Are they are Hero? Y/N:</label>
        <input name="hero">
      </div>

      <button type="submit">Create</button>
    </form>

<!-- Step 5: (2 points) Include your footer here -->
<?php
  include('./_footer.php');
?>
</html>
<!-- TOTAL POINTS POSSIBLE: 24 -->