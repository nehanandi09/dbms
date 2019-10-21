<?php
include("header.php");
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body style="background-color:#white;color:#2a4e66;text-align:center;">
    <h1>You have logged out.</h1><br><br>
    <h2><a href="login.php" class="btn btn-primary">Click here to login</a></h2>
  </body>
</html>