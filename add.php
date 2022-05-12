<?php
include 'header.php';
?>
<div class="container">
  <h4>Add Contact Information</h4>
  <div class="row">
    <div class="col d-flex gap-5 flex-column align-items-center justify-content-center">
      <form action="insertToDatabase.php" method="post">
        <div class="form-group my-2 d-flex gap-3">
          <label for="fname">First Name: *</label>
          <input class="justify-content-end" type="text" name="fname" id="fname" required>
        </div>

        <div class="form-group my-2 d-flex gap-3">
          <label for="lname">Last Name: *</label>
          <input class="justify-content-end" type="text" id="lname" name="lname" required>
        </div>

        <div class="form-group my-2 d-flex gap-3">
          <label for="email">Email Address: *</label>
          <input class="justify-content-end" type="text" name="email" id="email" required>
        </div>

        <div class="form-group my-2 d-flex gap-3">
          <label for="homephone">Home Phone: *</label>
          <input class="justify-content-end" type="text" id="homephone" name="homephone" required>
        </div>

        <div class="form-group my-2 d-flex gap-3">
          <label for="cellphone">Cell Phone: </label>
          <input class="justify-content-end" type="text" name="cellphone" id="cellphone">
        </div>
        
        <div class="form-group my-2 d-flex gap-3">
          <label for="officephone">Office Phone: </label>
          <input class="justify-content-end" type="text" id="officephone" name="officephone">
        </div>
        
        <div class="form-group my-2 d-flex gap-3">
          <label for="address">Address: *</label>
          <!-- <input class="justify-content-end" type="text" name="address" id="address" required> -->
          <textarea name="address" id="address" cols="30" rows="3"></textarea>
        </div>
        
        <div class="form-group my-2 d-flex gap-3">
          <label for="comment">Comment: </label>
          <!-- <input class="justify-content-end" type="text" id="comment" name="comment"> -->
          <textarea name="comment" id="comment" cols="30" rows="3"></textarea>
        </div>

        <button class="btn btn-danger mt-3 justify-self-center">Reset</button>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>