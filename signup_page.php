<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/signin_page.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">


</head>
<body>

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <h3>Sign Up to <a href="index.php">MiCROTECH</a></h3>

                        <form action="signup_check.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

                            <div class="row">
                                <div class="col-6 form-group first">
                                    <label for="fname">First Name</label>
                                    <?php if (isset($_GET['fname'])) { ?>
                                        <input  type="text" 
                                                name="fname" 
                                                class="form-control" 
                                                id="fname"
                                                value="<?php echo $_GET['fname']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="fname" >
                                    <?php }?>
                                </div>

                                <div class="col-6 form-group first">
                                    <label for="lname">Last Name</label>
                                    <?php if (isset($_GET['lname'])) { ?>
                                        <input  type="text" 
                                                name="lname" 
                                                class="form-control" 
                                                id="lname"
                                                value="<?php echo $_GET['lname']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="lname" >
                                    <?php }?>
                                </div>
                            </div>

                            <div class="form-group first">
                                <label for="email">Email</label>
                                    <?php if (isset($_GET['email'])) { ?>
                                        <input  type="text" 
                                                name="email" 
                                                class="form-control" 
                                                id="email"
                                                value="<?php echo $_GET['email']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="email" >
                                    <?php }?>
                            </div>

                            <label class="spacing" for="address">Address</label>

                            <div class="row">
                                <div class="col-6 form-group first">
                                    <label for="addrstr1">Street address 1</label>
                                    <?php if (isset($_GET['addrstr1'])) { ?>
                                        <input  type="text" 
                                                name="addrstr1" 
                                                class="form-control" 
                                                id="addrstr1"
                                                value="<?php echo $_GET['addrstr1']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="addrstr1" >
                                    <?php }?>
                                </div>
                                <div class="col-6 form-group first">
                                    <label for="addrstr2">Street address 2</label>
                                    <?php if (isset($_GET['addrstr2'])) { ?>
                                        <input  type="text" 
                                                name="addrstr2" 
                                                class="form-control" 
                                                id="addrstr2"
                                                value="<?php echo $_GET['addrstr2']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="addrstr2" >
                                    <?php }?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 form-group first">
                                    <label for="city">City</label>
                                    <?php if (isset($_GET['city'])) { ?>
                                        <input  type="text" 
                                                name="city" 
                                                class="form-control" 
                                                id="city"
                                                value="<?php echo $_GET['city']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="city" >
                                    <?php }?>
                                </div>
                                <div class="col-6 form-group first">
                                    <label for="country">Country</label>
                                    <?php if (isset($_GET['country'])) { ?>
                                        <input  type="text" 
                                                name="country" 
                                                class="form-control" 
                                                id="country"
                                                value="<?php echo $_GET['country']; ?>">
                                    <?php }else{ ?>
                                        <input type="text" 
                                                class="form-control"
                                                name="country" >
                                    <?php }?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zip">Zip Code</label>
                                <?php if (isset($_GET['zip'])) { ?>
                                        <input  type="number" 
                                                name="zip" 
                                                class="form-control" 
                                                id="zip"
                                                value="<?php echo $_GET['zip']; ?>">
                                    <?php }else{ ?>
                                        <input type="number" 
                                                class="form-control"
                                                name="zip" >
                                    <?php }?>
                            </div>

                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>

                            <div class="form-group last mb-4">
                                <label for="confpassword">Confirm password</label>
                                <input type="password" name="confpassword" class="form-control" id="confpassword">
                            </div>

                            <input type="submit" value="Sign Up" class="btn btn-block primary-btn">
                            <div class="d-block text-center my-4 p-b-30 txt1">
                                    Already have an account? 
                                <a href="signin_page.php" class="txt2">
                                    Sign In
                                </a>
                            </div>
                        </form>
                        <?php echo $error; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>