<?php
include 'header.php';
?>

<?php
$lname = $_POST["lname"];
$fname = $_POST["fname"];
//$query = "DELETE FROM contacts WHERE lname='One' and fname='One';";
$query = "DELETE FROM contacts WHERE lname = '$lname' AND fname = '$fname'";
$result = mysqli_query($conn, $query);
if ($result) {
  echo "<h4>Selected record deleted.</h4> <br>";
}
if (isset($_POST['$lname'])) {
  echo "Checked!";
}
if (isset($_POST['$fname'])) {
  echo "Checked!";
}
mysqli_close($conn);
?>
<a href="index.php" class="btn btn-success">Go Home</a>

<?php
include 'footer.php';
?>