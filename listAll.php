<?php
include 'header.php';
?>
<div class="container">
  <h4>All Contact Information</h4>
  <div class="row d-flex">
    <div class="col d-flex flex-column">
      <?php
      $query = "select lname, fname from contacts";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<a class='contact-link' href='contact.php?lname=" . $row["lname"] . "&fname=" . $row["fname"] . "'>" . $row["fname"] . " " . $row["lname"] . "</a>";
        }
      }
      mysqli_close($conn);
      ?>
    </div>
  </div>
</div>


<?php
include 'footer.php';
?>

<!-- INSERT INTO `contacts` (`lname`, `fname`, `email`, `homePhone`, `cellPhone`, `officePhone`, `address`, `comment`) VALUES
('Erdogan', 'Osman', '19SOFT1013@isik.edu.tr', '111-1-111', '905306619958', '222-2-222', 'Sile Istanbul 34980', 'Database Homework #2'),
('Nuri', 'Osman', '19SOFT1033@isik.edu.tr', '111-1-111', '905306619960', '222-2-222', 'Sile Istanbul 34980', 'Database Homework #2 - P1'),
('Tuncel', 'ElifSu', '19SOFT1032@isik.edu.tr', '111-1-111', '905306619959', '222-2-222', 'Sile Istanbul 34980', 'Database Homework #2');
-->