<?php 
  include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	<link href="css/staffstyle.css" rel="stylesheet" type="text/css" >
</head>
<body>
<div id="login">
        <h3 class="text-center text-white pt-5">Staff Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="emailid" class="text-info">Email id</label><br>
                                <input type="text" name="emailid" id="emailid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <p></p>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br><br>
                                <input type="submit" name="submit" class="btn btn-info btn-lg" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>