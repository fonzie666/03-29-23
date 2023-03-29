<?php
$title="index";
require_once 'include/header.php';
?>

<h1 class= "text-center"> Registration for IT conference </h1>

<form>
  <div class="row">
    <div class="col-2">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-2">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>


<form>
    <div class="form-inline">
  <label for="birthday">Date of birth:</label>
  <input type="date" id="birthday" name="birthday">
</div>
</form>


<form class="form-inline">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Specialty</label>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web administrator</option>
    <option value="3">Other</option>
  </select>

  <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input type="checkbox" class="custom-control-input" id="customControlInline">
    <label class="custom-control-label" for="customControlInline">Remember my preference</label>
  </div>

  
</form>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<?php require_once 'include/footer.php'; ?>