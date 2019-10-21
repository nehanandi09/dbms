<?php 
	include("header.php");
    include("server.php");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration Form</title>
 	<link href="css/rglstyle.css" rel="stylesheet" type="text/css" >
 </head>
 <body>
 <div class="container">
            <form class="form-horizontal" role="form" method="post" action="server.php">
                <h2>Registration</h2>
                <br>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label font-weight-bold">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" name = "fname" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label font-weight-bold">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" placeholder="Last Name" name = "lname" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label font-weight-bold">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label font-weight-bold">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control" name = "password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label font-weight-bold">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control" name = "c_password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label font-weight-bold">Date of Birth*</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control" name="dob">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label font-weight-bold">Phone number </label>
                    <div class="col-sm-9">
                        <input type="phoneNumber" id="phoneNumber" placeholder="Phone number" class="form-control" name="phno">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label font-weight-bold">Height* </label>
                    <div class="col-sm-9">
                        <input type="number" id="height" placeholder="Please write your height in centimetres" class="form-control" name = "height">
                    </div>
                </div>
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-labe font-weight-bold">Weight* </label>
                    <div class="col-sm-9">
                        <input type="number" id="weight" placeholder="Please write your weight in kilograms" class="form-control" name = "weight">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female" name="gender">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male" name="gender">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block font-weight-bold">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-register btn-block text-white" name="submit_new">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
 </body>
 </html>