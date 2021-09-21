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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/footer.css"
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">




</head>
<body>

<!-- Header -->
<header>
    <div class="container-menu">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    <?php echo "Island Wide Delivary"?>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "My Account"?>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "Help & FAQs"?>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "EN"?>
                    </a>

                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        <?php echo "LKR"?>
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
                        <li class="active-menu">
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="product.php">Shop</a>
                        </li>

                        <li class="label1" data-label1="hot">
                            <a href="shoping-cart.php">Features</a>
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
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>

                    </div>
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>

                    <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                        <i class="zmdi zmdi-favorite-outline"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Header end-->


<!-- Shopping Cart Section Begin -->
<section class=" spad">
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
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product__cart__item">
                                <div class="product__cart__item__pic">
                                    <img src="images/shopping-cart/cart-1.jpg" alt="">
                                </div>
                                <div class="product__cart__item__text">
                                    <h6>Iphone 13 pro</h6>
                                    <h5>$ 999</h5>
                                </div>
                            </td>
                            <td class="quantity__item">
                                <div class="quantity">
                                    <div class="pro-qty-2">
                                        <span class="fa fa-angle-left dec qtybtn"></span>
                                        <input type="text" value="1">
                                        <span class="fa fa-angle-right inc qtybtn"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="cart__price">$ 999</td>
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
                        <li >Subtotal <span>$ 999.00</span></li>
                        <li>Total <span>$ 999.00</span></li>
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
                    <p>Passion shouldn't cost a fortune. <br> On MiCROTECH, shop online for better deals on Electronic products.</p>
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

</body>
</html>
