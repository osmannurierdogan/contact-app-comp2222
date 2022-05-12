<?php
include 'header.php';
?>
<div class="container">
  <div class="row">
    <div class="col">
      <h4>Delete the contact via searching</h4>
      <form action="deleteByText.php" method="post">
        <div class="form-group my-2 d-flex gap-3">
          <label for="fname">First Name: </label>
          <input type="text" id="fname" name="fname">
        </div>
        <div class="form-group my-2 d-flex gap-3">
          <label for="lname">Last Name: </label>
          <input type="text" id="lname" name="lname">
        </div>
        <button class="btn btn-danger">Delete</button>
      </form>
    </div>
    <div class="col d-flex flex-column">
      <?php
      $query = "select lname, fname from contacts";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<a class='contact-link text-success' href='contact.php?lname=" . $row["lname"] . "&fname=" . $row["fname"] . "'>" . $row["fname"] . " " . $row["lname"] . "</a>";
        }
      }
      //mysqli_close($conn);
      ?>
    </div>
  </div>
  <div class="row my-5">
    <div class="col">
      <h4>Delete the contact</h4>
      <form action="deleteByCheck.php" method="post">
        <div class="form-group my-2 d-flex flex-column gap-3">
          <?php
          $query = "SELECT fname, lname FROM contacts";
          $result = mysqli_query($conn, $query);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $checkboxValueFirst = $row["fname"];
              $checkboxValueLast = $row["lname"];
              $inputNameValue = "$checkboxValueLast.$checkboxValueFirst";

              $labelElement = "<label for='$inputNameValue'>$checkboxValueFirst $checkboxValueLast</label>";
              $inputElement = "<input type=\"checkbox\" name='contacts[]' id='$inputNameValue' value='$inputNameValue'>";
              $contactItemElement = "<div class=\"contact-item\">$inputElement $labelElement</div>";
              echo $contactItemElement;
              
              /* $linkElement = "<label for=\"${row["lname"]}.${row["fname"]}\">${row["fname"]} ${row["lname"]}</label>";
              $inputElement = "<input type=\"checkbox\" name=\"${row["lname"]}.${row["fname"]}\" id=\"${row["lname"]}.${row["fname"]}\">";
              //$labelElement = "<label for=\"${row["lname"]}.${row["fname"]}\">$linkElement</label>";
              $contactItemElement = "<div class=\"contact-item\">$inputElement $linkElement</div>";
              echo $contactItemElement;
              $checkboxValues = $row["fname"].".".$row["lname"];
              $lnameValue = preg_split("/[.]+/", $checkboxValues)[0];
              $fnameValue = preg_split("/[.]+/", $checkboxValues)[1];
              echo $fnameValue . "=>" .  $lnameValue;
              // if(isset($_POST[$row["lname"]])){echo "Checked!";}
              // if(isset($_POST[$row["fname"]])){echo "Checked!";} */
            }
          }
          // ! mysqli_close($conn);
          ?>
        </div>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>