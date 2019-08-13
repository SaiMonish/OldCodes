 <?php 
//Loding the header file
include('header.php');
?>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-6 offset-md-3">

      <div class="card shadow p-3 mb-5 bg-white rounded">
   
  <div class="card-body">
    <h5 class="card-title">Please login to continue</h5>
    <form action="/action_page.php" target="_blank">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
  </div>
</div>

      
    </div>
  </div>
</div>


<?php
//Load the footer file 
include('footer.php');

?>

 

 
 

