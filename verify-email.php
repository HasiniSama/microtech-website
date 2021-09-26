<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">


</head>
<body>
<?php
    if($_GET['key'] && $_GET['token']){
        include "db_conn.php";
        $email = $_GET['key'];
        $token = $_GET['token'];
        $query = mysqli_query($conn,"SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `email`='".$email."';");
        $d = date('Y-m-d H:i:s');

        if (mysqli_num_rows($query) > 0) {
            $row= mysqli_fetch_array($query);

            if($row['email_verified_at'] == NULL){
                mysqli_query($conn,"UPDATE users set email_verified_at ='" . $d . "' WHERE email='" . $email . "'");
                mysqli_query($conn,"UPDATE users set status ='1' WHERE email='" . $email . "'");
                $msg = "Congratulations! Your email has been verified.";
            }else{
                $msg = "You have already verified your account with us";
            }

        } else {
            $msg = "This email has been not registered with us";
        }
    }
    else{
        $msg = "Danger! Your something goes to wrong.";
    }
?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
            User Account Activation by Email Verification using PHP
            </div>

            <div class="card-body">
                <p><?php echo $msg; ?></p>
            </div>
        </div>
    </div>
    <div class="container mt-5 goto-btn">
        <form action="index.php">
            <input type="submit" value="Go to MiCROTECH" class="btn btn-block primary-btn">
        </form>
    </div>
</body>
</html>