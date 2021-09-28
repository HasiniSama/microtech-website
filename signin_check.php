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

        
		$sql_user = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$sql_admin = "SELECT * FROM admins WHERE email='$email' AND passwd='$pass'";

		$result_user = mysqli_query($conn, $sql_user);
		$result_admin = mysqli_query($conn, $sql_admin);

        if (mysqli_num_rows($result_user) === 1) {
            $row = mysqli_fetch_assoc($result_user);
            if ($row['email'] === $email && $row['password'] === $pass) {
                if ($row['status'] === '0') {
                    header("Location: signin_page.php?error=Please verify your email");
                    exit();
                } else {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['fname'] = $row['f_name'];
                    $_SESSION['lname'] = $row['l_name'];

                    header("Location: index.php");
                    exit();
                }
            } else {
                header("Location: signin_page.php?error=Incorect email or password");
                exit();
            }

        }elseif(mysqli_num_rows($result_admin) === 1) {
            $row = mysqli_fetch_assoc($result_admin);
            if ($row['email'] === $email && $row['passwd'] === $pass) {
                    $_SESSION['admin_email'] = $row['email'];
                    $_SESSION['admin_fname'] = $row['f_name'];
                    $_SESSION['admin_lname'] = $row['l_name'];

                    header("Location: index.php");
                    exit();
            } else {
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