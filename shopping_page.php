<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_page.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<!-- Header -->
<?php $page = 'shop'; include 'include/header.php'; ?>

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
            Smartphones
        </span>
    </div>
</div>

<!-- Shop Section -->
<section class="shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop_sidebar">
                    <div class="shop_sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop_sidebar_accordion">
                        <div class="card">
                            <span class="card-heading"> Categories </span>
                            <div class="card-body">
                                <div class="shop_sidebar_filter">
                                    <ul>
                                        <li><a href="#">Smart Phones</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Tablets</a></li>
                                        <li><a href="#">Laptops</a></li>
                                        <li><a href="#">Audio</a></li>
                                        <li><a href="#">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <span class="card-heading"> Brands </span>
                            <div class="card-body">
                                <div class="shop_sidebar_filter">
                                    <ul>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">OnePlus</a></li>
                                        <li><a href="#">Huawei</a></li>
                                        <li><a href="#">Xiaomi</a></li>
                                        <li><a href="#">Asus</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/1.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>iPhone 12 Pro</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 291,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/2.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>OnePlus 9 Pro</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 199,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/3.png">
                            </div>
                            <div class="product_item_text">
                                <h5>iPad Pro 11 </h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 235,000.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/4.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>OnePlus Nord CE 5G </h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 89,990.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/5.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>Samsung Galaxy S21 Plus </h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 224,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/6.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>AirPods Max </h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 139,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/7.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>OnePlus Bullets Wireless Z</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 12,990.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/8.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>Apple Watch Series 4</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 79,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/9.png">
                            </div>
                            <div class="product_item_text">
                                <h5>Amazfit Pace</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 18,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/10.jpeg">
                            </div>
                            <div class="product_item_text">
                                <h5>Apple MacBook Air M1</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 249,900.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/11.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>MacBook Pro M1</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 377,000.00</h6>
                            </div>
                        </div>
                    </div>
                    <!--------------Products------------------->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product_item">
                            <div class="product_item_pic set-bg" data-setbg="images/products/12.jpg">
                            </div>
                            <div class="product_item_text">
                                <h5>Bose NC Headphones 700</h5>
                                <a href="#"> View Item </a>
                                <h6>LKR 67,900.00</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!----------Page count----------->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'include/footer.php'; ?>

<!-- Js Plugins -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/bfc2cbc6c6.js" crossorigin="anonymous"></script>

    <script src="js/shopping_page.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
