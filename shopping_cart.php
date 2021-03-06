<?php
include "db_conn.php";

//get session variables
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
}
else if(isset($_SESSION['admin_email'])) {
    $email = $_SESSION['admin_email'];
}
else{
    $email = "";
}

$_SESSION['cart_sql'] = "SELECT cart.itemid,
                              cart.no_of_items,
                              items.item_name,
                              items.img_name1,
                              items.item_price,
                              items.long_description 
                       FROM `cart`,
                            `items`
                       WHERE cart.usermail='".$email."' 
                       and cart.itemid=items.item_id;";

//$result = $conn->query($_SESSION['cart_sql']);

session_write_close();

if(isset($_REQUEST['submit'])){
    $productId = $_REQUEST['itemId'];
    $qty = $_REQUEST['qty'];

    //getting current stock values
    $sqlQuery2 = "SELECT * FROM stock WHERE item_id = ".$productId;
    $result2 = $conn->query($sqlQuery2);
    $stockItem = $result2->fetch_array();
    $no_of_items = $stockItem['no_of_items'];

    //update stock values
    $new_no_of_items = $no_of_items + $qty;
    $sqlQuery3 = "UPDATE stock SET no_of_items = " . $new_no_of_items . " WHERE item_id = " . $productId;
    $result3 = $conn->query($sqlQuery3);

    $sqlQuery4 = "DELETE from cart WHERE usermail ='".$email."' AND itemid = '".$productId."'";
    $result4 = $conn->query($sqlQuery4);
}

//update cart items again
$result = $conn->query($_SESSION['cart_sql']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/
                material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_page.css">
</head>
<body>

<!-- Header -->
<?php
$page = 'cart';
include 'include/header.php';
$_SESSION['total'] = 0;
?>

<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w  p-r-15 p-t-100">
        <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="shopping_page.php" class="stext-109 cl8 hov-cl1 trans-04">
            Shop
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Shopping Cart
        </span>
    </div>
</div>

<!-- Shopping Cart Section Begin -->
<section class="spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                            <!--Iterate through cart - begin-->
                            <?php while ($row = $result->fetch_array()) { ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img  <?php echo "src = '".$row['img_name1']."'";  ?>  alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $row['item_name']; ?></h6>
                                            <h5><?php echo "LKR. ".$row['item_price']; ?></h5>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="p-l-60"><?php echo $row['no_of_items'];?></h5>
                                    </td>

                                    <td class="cart__price">
                                        <h5><?php echo "LKR. ".$row['item_price']*$row['no_of_items']."/-";?></h5>
                                    </td>
                                    <td>
                                        <form id="form" name="form" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                                            <input type="hidden" name="itemId" id="itemId" value="<?php echo $row['itemid']; ?>">
                                            <input type="hidden" name="qty" id="qty" value="<?php echo $row['no_of_items']; ?>">
                                            <button type="submit" name="submit" id="submit" class="btn btn-close m-l-32 m-b-8">
                                            
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $_SESSION['total'] += $row['item_price']*$row['no_of_items'];
                            } ?>
                            <!--iterate through cart - end-->
                        </tbody>
                    </table>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="shopping_page.php">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Clear cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>

                        <li>Total <span><?php echo "LKR ".$_SESSION['total'] ?></span></li>
                    </ul>
                    <a href="checkout.php" class="primary-btn"><span>Proceed to checkout</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->


<!-- Footer Section -->
<?php include 'include/footer.php'; ?>

    <!--Footer section end-->
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

    <script src="js/app.js"></script>	
    <script src="js/product.js"></script>
</body>
</html>
