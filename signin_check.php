<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: signin_page.php?error=Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: signin_page.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['fname'] = $row['f_name'];
				$_SESSION['lname'] = $row['l_name'];

            	header("Location: index.php");
		        exit();
            }else{
				header("Location: signin_page.php?error=Incorect email or password");
		        exit();
			}
		}else{
			header("Location: signin_page.php?error=Incorect email or password");
	        exit();
		}
	}
	
}else{
	header("Location: signin_page.php");
	exit();
}