<?php
  $session=session_start();
  $host='localhost';
  $user='root';
  $user_pw = '1234';
  $user_db='hms';
  $db=mysqli_connect($host,$user,$user_pw,$user_db);

/*  $sql = "INSERT INTO patient (PID,f_name,l_name,email,Password,DOB,phno,height,weight,gender)
VALUES ('1','John', 'Doe', 'john@example.com','qwerty123','16-FEB-1982','9876543210','170','67','Male')";
if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}*/
	

    if(isset($_POST['submit_new'])){
    	$errors = array();

        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password_1 = $_POST['password'];
        $password_2 = $_POST['c_password'];

        $dob = $_POST['dob'];
        $phno = $_POST['phno'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $gender = $_POST['gender'];

  /*      if(empty($firstName)){array_push($errors,"First name is required");}
        if(empty($lastName)){array_push($errors,"Last name is required");}
        if(empty($email)){array_push($errors,"email is required");}
        if(empty($password_1 != $password_2)){array_push($errors,"Passwords do not match");}
        if(empty($dob)){array_push($errors,"DOB is required");}
        if(empty($height)){array_push($errors,"Height is required");}
        if(empty($weight)){array_push($errors,"Weight is required");}

        $email_check = "SELECT * from patient where email='$email' LIMIT 1";
        $results = mysqli_query($db,$email_check);
        $email_fetch = mysqli_fetch_assoc($results);

        if($email_fetch)
        {
        	if($email_fetch['email'] === $email){array_push($errors, "Email already exists");}
        }

        if(count($errors)==0){*/

        $password = md5($password_1);
        $query = "INSERT INTO patient (f_name,l_name,email,Password,DOB,phno,height,weight,gender) VALUES ('$firstName','$lastName','$email','$password','$dob','$phno','$height','$weight','$gender')";
        $result=mysqli_query($db,$query);

        if($result){
          echo "New User Generated";
          header("Location:login.php");
    		}
    	}
	
	//user login for patients

?>