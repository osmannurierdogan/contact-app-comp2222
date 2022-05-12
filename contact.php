<?php
include 'header.php';
?>
<?php
$fname = $_GET["fname"] ?? $_POST["fname"];
$lname = $_GET["lname"] ?? $_POST["lname"];

$query = "SELECT lname, fname, email, homePhone, cellPhone, officePhone, address, comment from contacts WHERE lname= '$lname' AND fname= '$fname' ";
$result = mysqli_query($conn, $query);
if ($tupple = mysqli_fetch_assoc($result)) {
  $email = $tupple["email"];
  $homePhone = $tupple["homePhone"];
  $cellPhone = $tupple["cellPhone"];
  $officePhone = $tupple["officePhone"];
  $address = $tupple["address"];
  $comment = $tupple["comment"];
} else {
  //$hiddenFlag = true;
  echo "<style>#contactDetail{visibility: hidden !important;}</style>";
  echo "<h5>There is no such contact!</h5><br><a href='index.php' class='btn btn-success'>Go Home</a>";
}
mysqli_close($conn);
?>
<div id="contactDetail" class="container" style="visibility: visible">
  <h4><?php echo $fname, " ", $lname ?></h4>
  <div class="row">
    <div class="col">
      <div>
        <span>First Name: *</span>
        <strong id="fname"><?php echo $fname ?></strong>
      </div>

      <div>
        <span>Last Name: *</span>
        <strong id="lname"><?php echo $lname ?></strong>
      </div>

      <div>
        <span>Email Address: *</span>
        <strong id="email"><?php echo $email ?></strong>
      </div>

      <div>
        <span>Home Phone: *</span>
        <strong id="homephone"><?php echo $homePhone ?></strong>
      </div>

      <div>
        <span>Cell Phone: </span>
        <strong id="cellphone"><?php echo $cellPhone ?></strong>
      </div>

      <div>
        <span>Office Phone: </span>
        <strong id="officephone"><?php echo $officePhone ?></strong>
      </div>

      <div>
        <span>Address: *</span>
        <strong id="address"><?php echo $address ?></strong>
      </div>

      <div>
        <span>Comment: </span>
        <strong id="comment"><?php echo $comment ?></strong>
      </div>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>