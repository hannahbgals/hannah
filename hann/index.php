<body>
<?php
    $title = 'Index';
require_once 'includes/header.php' ?>

<!---
    -First Name
    -Last NAme
    -Date of Birth
    -Specialty
    -Email Address
    -Contact Number
    ------>
 <h1 class="text-center"> Registration for IT Conference </h1>
 

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your information to anyone.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <form action="action_page.php">
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday">
    
    </form></div>

    <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Specialty:</label>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Database Admin</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Software Developer</label>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Web Administrator</label>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email Address</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php require_once 'includes/footer.php' ?>


    