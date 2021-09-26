<?php
//Include required PHPMailer files
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['password-reset-token']) && $_POST['email']){
    include "db.php";
    $result = $conn -> query("SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
      
        if(($result -> num_rows) == 0){
            $token = md5($_POST['email']).rand(10,9999);
            mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");
            $link = "<a href='localhost/phpmailer/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";
            
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
                $mail->Body = "<h1>Please verify your email</h1><br><p>Click On This Link to Verify Email :  '.$link.'</p><br><br><p>Best Regards,</p><p>KDH Web developers</p>";
                //Add recipient
                $mail->addAddress($_POST['email']);

                //Send email
                $mail->send();
                echo "Check Your Email box and Click on the email verification link.";

                //Closing smtp connection
	            $mail->smtpClose();
            }catch (Exception $e) {
                echo "Mail Error - >".$mail->ErrorInfo;
            }
            
            $result -> free_result();
        }
        
        else{
            echo "You have already registered with us. Check Your email box and verify email.";
             $result -> free_result();
        }
   
}
$conn -> close();
?>