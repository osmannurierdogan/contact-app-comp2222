<?php
include "./header.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$homePhone = $_POST["homephone"];
$cellPhone = $_POST["cellphone"];
$officePhone = $_POST["officephone"];
$address = $_POST["address"];
$comment = $_POST["comment"];

$query = "INSERT INTO contacts VALUES ('" . $lname."','".$fname ."','". $email . "','" . $homePhone . "','" . $cellPhone . "','" . $officePhone . "','" . $address . "','" . $comment ."');";
$result = mysqli_query($conn, $query);
if($result){
  echo "<h5>New record added successfully.</h5> <br>";
} else {
  echo "<h5>The record could not be added.</h5>";
}
mysqli_close($conn);
?>
<a href="index.php" class="btn btn-success">Go Home</a>