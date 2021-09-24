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

</head>
<body>

<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <h3>Sign Up to <strong>MiCROTECH</strong></h3>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-6 form-group first">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                                <div class="col-6 form-group first">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                            </div>

                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>

                            <label class="spacing" for="address">Address</label>

                            <div class="row">
                                <div class="col-6 form-group first">
                                    <label for="addrstr1">Street address 1</label>
                                    <input type="text" class="form-control" id="addrstr1">
                                </div>
                                <div class="col-6 form-group first">
                                    <label for="addrstr2">Street address 2</label>
                                    <input type="text" class="form-control" id="addrstr2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6 form-group first">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city">
                                </div>
                                <div class="col-6 form-group first">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zip">Zip Code</label>
                                <input type="number" class="form-control" id="zip">
                            </div>

                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <div class="form-group last mb-4">
                                <label for="confpassword">Confirm password</label>
                                <input type="password" class="form-control" id="confpassword">
                            </div>

                            <input type="submit" value="Sign Up" class="btn text-white btn-block btn-primary">

                        </form>
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