<?php 
  include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>

</head>
<body>
<div class="container-fluid d-flex justify-content-center">
    <img src="images/heartrate.jpg" class="image-fluid">
</div>
<br>
<!-- Page Content -->
<div class="container">
  <div class="card-deck">
    <div class="card">
    <div class="card-body text-center">
      <h1 class="font-weight-bold crd-pl">Patient Login</h1>
      <p class="lead font-weight-normal">Need an appointment? Login now</p>
      <a href="/Healthcare/login.php" class="btn btn-info btn-lg btn-block" role="button">Login</a>
    </div>
    </div>
      <div class="card">
    <div class="card-body text-center">
      <h1 class="font-weight-bold crd-pl">Staff Login</h1>
      <p class="lead font-weight-normal">For Staff only</p>
       <a href="/Healthcare/stafflogin.php" class="btn btn-info btn-lg btn-block" role="button">Login</a>
    </div>
  </div>
    <div class="card">
    <div class="card-body text-center">
      <h1 class="font-weight-bold crd-pl">Admin Login</h1>
      <p class="lead font-weight-normal">Admin only</p>
      <p></p>
      <a href="/Healthcare/adminlogin.php" class="btn btn-info btn-lg btn-block" role="button">Login</a>
    </div>
</div>
</div>

<br>
<br>

<div class="container-footer">
    <hr>
    <footer class="page-footer">
        <p align="right">
            Made and managed using HMS by Corbitol</p>
    </footer>
</div>
</body>
</html>
