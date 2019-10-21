
<?php 
  include("header.php");
  include("server.php");

    if(isset($_POST['submit'])){

        $email = $_POST['emailid'];
        $password = md5($_POST['password']);

        $query="SELECT * from patient where email='$email' and Password='$password';";
        $result=mysqli_query($db,$query);
        if($result)
        {
           echo "Logged in successfully";
           header("Location:patient.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link href="css/logs.css" rel="stylesheet" type="text/css" >
</head>
<body>
	
<div id="login">
        <h3 class="text-center text-white pt-5">Patient Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="emailid" class="text-info">Email id</label><br>
                                <input type="email" name="emailid" id="emailid" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <p></p>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br><br>
                                <input type="submit" name="submit" class="btn btn-info btn-lg" value="Submit">
                            </div>
                            <div id="register-link" class="text-right"><br><br>
                                <p>No account?<a href="/Healthcare/register.php" class="text-info">Register here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>