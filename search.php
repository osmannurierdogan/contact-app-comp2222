<?php
include 'header.php';
?>
<div class="container">
  <div class="row">
    <h4>Search the contacts</h4>
    <form action="contact.php" method="post">
      <div class="form-group my-2 d-flex gap-3">
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname">
      </div>
      <div class="form-group my-2 d-flex gap-3">
        <label for="lname">Last Name: </label>
        <input type="text" id="lname" name="lname">
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
</div>
<?php
include 'footer.php';
?>