<?php
include 'header.php';
/* if (isset($_POST['contacts'])) {
  echo "Checked submittedValue!";
} else {
  echo "Not checked";
} */
//$lnameArray = [];
//$fnameArray = [];
for($i = 0; $i < count($_POST['contacts']); $i += 1){
  $lnameValue = preg_split("/[.]+/", $_POST['contacts'][$i])[0];
  $fnameValue = preg_split("/[.]+/", $_POST['contacts'][$i])[1];
  runQuery($lnameValue, $fnameValue);
  //array_push($lnameArray, $lnameValue);
  //array_push($fnameArray, $fnameValue);
}

function runQuery($lnameValue, $fnameValue){
  include 'header.php';
  $query = "DELETE FROM contacts WHERE lname = '$lnameValue' AND fname = '$fnameValue'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    echo "<h5>Selected records deleted.</h5> <br>";
  }
}
mysqli_close($conn);
?>
<a href="index.php" class="btn btn-success">Go Home</a>

<?php
include 'footer.php';
?>