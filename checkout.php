<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/
          material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<?php
    /*including header*/
    $page = 'cart'; include 'include/header.php';

    /*getting session variables*/
    $email = $_SESSION['email'];
    $cart_sql = $_SESSION['cart_sql'];
    $cart_result = $conn->query($cart_sql);


    /*generating an orderid*/
    $order_sql = "SELECT * FROM orders;";
    $order_result = $conn->query($order_sql);
    $number_of_orders = $order_result->num_rows;
    $order_id = $number_of_orders + 1;
    $_SESSION['order_id'] = $order_id;


?>


<!-- Breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w  p-r-15 p-t-100">
        <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
            Cart
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Checkout
        </span>
    </div>
</div>
<!--Breadkcrumb end-->


<!--Form begin-->
<form method="post" action="https://sandbox.payhere.lk/pay/checkout">
    <input type="hidden" name="merchant_id" value="1218734">
    <input type="hidden" name="return_url" value="http://localhost:63342/microtech-website/pay_success.php">
    <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
    <input type="hidden" name="notify_url" value="http://localhost:63342/microtech-website/payment_notify.php">



    <input type="hidden" name="order_id" value="<?php echo $order_id ?>">
    <input type="hidden" name="items" value="

            <?php while ($row = $cart_result->fetch_array()) {
              echo $row['item_name'].",";
            }
            ?>

"><br>
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value="<?php echo $_SESSION['total']?>">

    <input type="hidden" name="country" value="Sri Lanka">

    <div class="container container-form">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <?php $cart_result = $conn->query($cart_sql);
                while ($row = $cart_result->fetch_array()) { ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php echo $row['item_name']; ?></h6>

                    </div>
                    <span class="text-muted">LKR <?php echo $row['item_price']; ?></span>
                </li>
                <?php }?>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>LKR <?php echo $_SESSION['total']; ?></strong>
                </li>
            </ul>

        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing</h4>
            <form class="needs-validation hoverclass" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value=""
                               required="">
                        <div class="invalid-feedback"> Valid first name is required.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value=""
                               required="">
                        <div class="invalid-feedback"> Valid last name is required.</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Required)</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates.</div>
                </div>
                <div class="mb-3">
                    <label for="phone_no">Phone no <span class="text-muted">(Required)</span></label>
                    <input type="tel" class="form-control" placeholder="provide a valid Phone no" name="phone"
                           pattern="[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}">
                    <div class="invalid-feedback"> Please enter a valid Phone no</div>
                </div>
                <div class="mb-3">
                    <label for="address">Street adress 1</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                           required="">
                    <div class="invalid-feedback"> Please enter your shipping address.</div>
                </div>
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="zip">City</label>
                        <input type="text" class="form-control" id="zip" name="city" placeholder="" required="">
                        <div class="invalid-feedback">City required</div>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback"> Zip code required.</div>
                    </div>
                </div>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label"
                           for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>


                <hr class="mb-4">

                <button class="btn_hover btn btn-dark btn-lg btn-block " value="buy Now" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
    <footer class="my-2 pt-5 text-muted text-center text-small">

    </footer>
</div>
</form>
<!--Form end-->

<!-- Footer Section -->
<?php include 'include/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="js/checkout.js"></script>
<script src="js/app.js"></script>
</body>
</html>