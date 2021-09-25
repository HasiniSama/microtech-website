<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['fname']) && isset($_POST['lname'])
    && isset($_POST['email']) && isset($_POST['addrstr1'])
	&& isset($_POST['addrstr2']) && isset($_POST['city'])
	&& isset($_POST['country']) && isset($_POST['zip'])
	&& isset($_POST['password']) && isset($_POST['confpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$email = validate($_POST['email']);

	$addrstr1 = validate($_POST['addrstr1']);
	$addrstr2 = validate($_POST['addrstr2']);
	$city = validate($_POST['city']);
	$country = validate($_POST['country']);
	$zip = validate($_POST['zip']);

	$pass = validate($_POST['password']);
	$c_pass = validate($_POST['confpassword']);
	

	if (empty($email)) {
		header("Location: signup_page.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: signup_page.php?error=Password is required");
	    exit();
	}
	else if(empty($c_pass)){
        header("Location: signup_page.php?error=Confirm Password is required");
	    exit();
	}

	else if(empty($fname)){
        header("Location: signup_page.php?error=First Name is required");
	    exit();
	}

	else if(empty($lname)){
        header("Location: signup_page.php?error=Last Name is required");
	    exit();
	}

	else if(empty($city)){
        header("Location: signup_page.php?error=City is required");
	    exit();
	}

	else if(empty($country)){
        header("Location: signup_page.php?error=Country is required");
	    exit();
	}

	else if(empty($zip)){
        header("Location: signup_page.php?error=Zip code is required");
	    exit();
	}

	else if(empty($addrstr1)){
        header("Location: signup_page.php?error=Address is required");
	    exit();
	}
	else if($pass !== $c_pass){
        header("Location: signup_page.php?error=The confirmation password does not match");
	    exit();
	}

	else{
		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup_page.php?error=The email is taken try another");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, f_name, l_name, password) VALUES ('$email', '$fname', '$lname', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
		   $sql3 = "INSERT INTO address(usermail, addr_line1, addr_line2, city, country, zip) VALUES('$email','$addrstr1', '$addrstr2', '$city', '$country', '$zip')";
           $result3 = mysqli_query($conn, $sql3);

           if ($result2 && $result3) {
           	 header("Location: signup_page.php?success=Your account has been created successfully. Confirmation email sent.");
	         exit();
           }else {
	           	header("Location: signup_page.php?error=unknown error occurred");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup_page.php");
	exit();
}
