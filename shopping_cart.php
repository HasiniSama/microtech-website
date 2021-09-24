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
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_page.css">
</head>
<body>

<!-- Header -->
<header>
    <div class="container-menu">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    <?php echo "Island Wide Delivary" ?>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "My Account" ?>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "Help & FAQs" ?>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "EN" ?>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "LKR" ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Menu bar -->
        <div class="wrap-menu">
            <nav class="limiter-menu container">

                <!-- Logo -->
                <a href="#" class="logo">
                    <img src="images/logo.png" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="menu">
                    <ul class="main-menu">
                        <li >
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="product.php">Shop</a>
                        </li>

                        <li>
                            <a href="shopping_cart.php">Features</a>
                        </li>

                        <li>
                            <a href="blog.php">Blog</a>
                        </li>

                        <li>
                            <a href="about.php">About</a>
                        </li>

                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search ">
                        <i class="zmdi zmdi-search"></i>

                    </div>
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                         data-notify="2">
                        <a href="shopping_cart.php">
                        <i class="zmdi zmdi-shopping-cart" id ="icon-active"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                       data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Header end-->

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
                            <th id="quanitiy">Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="images/products/13.0.webp" alt="">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>Samsung Galaxy Note20 5G</h6>
                                    <h5>LKR. 174,990 </h5>
                                </div>
                            </td>
                            <td class="quantity__item">
                                <div class="amount-counter">
                                    <div class="btn-num-product-down">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>

                                    <input class="num-product" type="number" name="num-product" value="1">

                                    <div class="btn-num-product-up">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">LKR. 174,990/-</td>
                            <td class="cart__close"><i class="fa fa-close"></i></td>
                        </tr>

                        </tbody>
                    </table>
                </div>


                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
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
                        <li>Subtotal <span>LKR. 174,990/-</span></li>
                        <li>Total <span>LKR. 174,990/-</span></li>
                    </ul>
                    <a href="#" class="primary-btn"><span>Proceed to checkout</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->


<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer_about">
                    <div class="footer_logo">
                        <a href="#"><img src="images/logo2.png" alt=""></a>
                    </div>
                    <p>Passion shouldn't cost a fortune. <br> On MiCROTECH, shop online for better deals on Electronic
                        products.</p>
                    <a href="#"><img src="images/shopping-cart/payment_icons.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer_widget">
                    <h6>Shopping</h6>
                    <ul>
                        <li><a href="#">Home Page</a></li>
                        <li><a href="#">Browse Products</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer_widget">
                    <h6>Users</h6>
                    <ul>
                        <li><a href="#">Admin Login</a></li>
                        <li><a href="#">Buyers Login</a></li>
                        <li><a href="#">Registration</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer_widget">
                    <h6>NewsLetter</h6>
                    <div class="footer_newsletter">
                        <p>Be the first to know about new arrivals, sales & promos!</p>
                        <form action="#">
                            <input type="text" placeholder="Your email">
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!--Footer section end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>	
    <script src="js/product.js"></script>
</body>
</html>
