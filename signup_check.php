<?php 
//Include required PHPMailer files
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
            $token = md5($email).rand(10, 9999);
            $sql2 = "INSERT INTO users(email, f_name, l_name, password, email_verification_link) VALUES ('$email', '$fname', '$lname', '$pass','$token')";
			$result2 = mysqli_query($conn, $sql2);
            $sql3 = "INSERT INTO address(usermail, addr_line1, addr_line2, city, country, zip) VALUES('$email','$addrstr1', '$addrstr2', '$city', '$country', '$zip')";
            $result3 = mysqli_query($conn, $sql3);

            $link = "<a href='localhost/microtech-website/verify-email.php?key=".$email."&token=".$token."'>Click and Verify Email</a>";
            
            try {
                //Create instance of PHPMailer
                $mail = new PHPMailer();
                //Set mailer to use smtp
                $mail->isSMTP();
                //Define smtp host
                $mail->Host = "smtp.gmail.com";
                //Enable smtp authentication
                $mail->SMTPAuth = true;
                //Set smtp encryption type (ssl/tls)
                $mail->SMTPSecure = "tls";
                //Port to connect smtp
                $mail->Port = "587";
                //Set gmail username
                $mail->Username = "microtech.kdh.webdevs@gmail.com";
                //Set gmail password
                $mail->Password = "KDHwebdevs123";
                //Email subject
                $mail->Subject = "Microtech : Email verification";
                //Set sender email
                $mail->setFrom('microtech.kdh.webdevs@gmail.com');
                //Enable HTML
                $mail->isHTML(true);
                //Email body
                //$mail->Body = "<h1>Please verify your email</h1><br><p>Click On This Link to Verify Email :  '.$link.'</p><br><br><p>Best Regards,</p><p>KDH Web developers</p>";
                $mail->Body = "	
				<h1 style='color:#717fe0;font-family: Arial, Helvetica, sans-serif;font-size:30px; text-align:center;line-height:2.5em;'>Welcome to Microtech!</h1>
				<hr>
				<table>
				<tr><td style='text-align:center'>
				<div>
				<a href=''><img src='https://image.freepik.com/free-photo/close-up-male-hands-using-laptop-home_1150-790.jpg' align='left' style='width:250px;height:250px;' alt=''/></a>
				<p style='color:#333; font-family: Allura,Arial, Helvetica, sans-serif; text-align:center; font-size:20px'>Thank you for creating an Mircotech account. Please verify your email to get started!</p>
				<p>Click On This Link to Verify Email :  '.$link.'</p>
				</div>
				</td>
				</tr>
				<tr>
				<td><div style='float:left;'><p style='color:#999; text-align:center; font-family: Arial, Helvetica, sans-serif; font-size:20px'>Microtech Online shopping platform for all your electronic needs and cravings.</p></div></td>
				</tr>
				</table>
				</div>";   
				//Add recipient
                $mail->addAddress($email);

                //Send email
                $mail->send();

				//Closing smtp connection
	            $mail->smtpClose();

                header("Location: signup_page.php?success=Your account has been created successfully. Confirmation email sent.");
				exit();

            }catch (Exception $e) {
				header("Location: signup_page.php?error=.$mail->ErrorInfo.unknown error occurred");
				exit();
            }

		}
	}
	
}else{
	header("Location: signup_page.php");
	exit();
}
