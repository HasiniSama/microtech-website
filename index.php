<?php
include "db_conn.php";

//get newly added items from database
$sqlQuery = "SELECT * FROM items ORDER BY item_id DESC LIMIT 4";
$result = $conn->query($sqlQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/shopping_page.css">
</head>
<body>

 <!-- Header -->
<?php $page = 'home'; include 'include/header.php'; ?>

 <!-- Carousel -->
<section class="carousel">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide-03.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide-02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide-04.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slide-01.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Banner -->
<section class="banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block 01 -->
                <div class="block1 hov-img0">
                    <img src="images/banner-01.jpg" alt="IMG-BANNER">

                    <a href="shopping_page.php?category=smartphone&brand="
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Smartphones
								</span>

                            <span class="block1-info stext-102 trans-04">
									Android | IOS
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block 01 -->
                <div class="block1 hov-img0">
                    <img src="images/banner-02.jpeg" alt="IMG-BANNER">

                    <a href="shopping_page.php?category=laptop&brand="
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Laptops
								</span>

                            <span class="block1-info stext-102 trans-04">
									Gaming | Work
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block 01 -->
                <div class="block1 hov-img0">
                    <img src="images/banner-03.jpg" alt="IMG-BANNER">

                    <a href="shopping_page.php?category=audio&brand="
                       class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Audio
								</span>

                            <span class="block1-info stext-102 trans-04">
									Customize | All
								</span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <h3 class="ltext-103 cl2">
                    New Arrivals
                </h3>
            </div>
        </div>

        <div class="flex-w flex-c-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10 align">
                    
                <button class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">
                    Smartphones
                </button>

                <button class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">
                    Laptops
                </button>

                <button class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">
                    Tablets
                </button>

                <button class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">
                    Audio
                </button>

                <button class="stext-106 cl6 bor3 trans-04 m-r-32 m-tb-5">
                    Smart Watches
                </button>
            </div>
        </div>

        <div class="row isotope-grid">
            <!-- Newly added products -->
            <?php while($row = $result->fetch_array()){ ?>
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-0 isotope-item">
                    <div class="block2">
                        <div class="block2-pic hov-img1 hov-img0">
                            <img src="<?php echo $row['img_name1'] ?>" alt="IMG-PRODUCT">
                            <a href="product_page.php?item=<?php echo $row['item_id'] ?>"
                               class="block2-btn flex-c-m stext-103 cl0 size-102 bg3 bor2 hov-btn2 p-lr-15 trans-04">
                                View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product_page.php?item=<?php echo $row['item_id'] ?>" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
                                    <?php echo $row['item_name'] ?>
                                </a>

                                <span class="stext-105 cl3">
                                        LKR <?php echo $row['item_price'] ?>
                                    </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative">
                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                         alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png"
                                         alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Deal of the Week -->
<section class="deal_of_the_week">
    <div class="container">
        <div class="row flex-t">
            <div class="col-lg-6">
                <div class="deal-pic">
                    <img src="images/products/50.0.jpg" alt="DEAL-OF-THE-WEEK">
                </div>
            </div>
            <div class="col-lg-6 p-t-80">
                <div class="h-full flex-column flex-c-m float-r">
                    <div class="dis-inline-block txt-center">
                        <h2 class="ltext-103 cl2">Deal Of The Week</h2>
                    </div>
                    <div class="txt-center">
                        <h3 class="stext-106 cl6">
                            Grab it while you can!
                        </h3>
                    </div>
                    <ul class="timer">
                        <li class=" d-inline-flex flex-column flex-c-m ">
                            <div id="day" class="timer-num cl1 ">03</div>
                            <div class="timer-unit ">Days</div>
                        </li>
                        <li class="d-inline-flex flex-column flex-c-m">
                            <div id="hour" class="timer-num cl1">15</div>
                            <div class="timer-unit">Hours</div>
                        </li>
                        <li class="d-inline-flex flex-column flex-c-m">
                            <div id="min" class="timer-num cl1">45</div>
                            <div class="timer-unit">Mins</div>
                        </li>
                        <li class="d-inline-flex flex-column flex-c-m">
                            <div id="sec" class="timer-num cl1">23</div>
                            <div class="timer-unit">Sec</div>
                        </li>
                    </ul>
                    <div class="p-t-23">
                        <a href="product_page.php?item=50" class="deal-btn flex-c-m stext-103 cl0 size-102 bg1 bor2 hov-btn1 trans-04">Shop
                            now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blogs -->
<section class="bg0 p-t-80 ">
    <div class="container">

        <div class="row">
            <div class="col txt-center">
                <h3 class="ltext-103 cl2">
                    Latest Blogs
                </h3>
            </div>
        </div>
        <div class="row p-t-3 p-b-30 ">
            <div class="col txt-center">
                <h3 class="stext-106 cl6">
                    Read all the latest product reviews here
                </h3>
            </div>
        </div>
        <div class="row isotope-grid flex-c-m">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35">
                <!-- Block -->
                <div class="block2">
                    <div class="block2-pic hov-img1">
                        <img src="images/blog_1.jpg" alt="IMG-PRODUCT">
                        <a href="#"
                           class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Read now
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="#" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
                                M1 MacBook Air review
                            </a>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                     alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png"
                                     alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 m-l-32 p-b-35 ">
                <!-- Block -->
                <div class="block2">
                    <div class="block2-pic hov-img1">
                        <img src="images/blog_2.jpg" alt="IMG-PRODUCT">
                        <a href="#"
                           class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Read now
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
                                M1 MacBook Air review
                            </a>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                     alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png"
                                     alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 m-l-32 p-b-35">
                <!-- Block -->
                <div class="block2">
                    <div class="block2-pic hov-img1">
                        <img src="images/blog_3.jpg" alt="IMG-PRODUCT">
                        <a href="#"
                           class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Read now
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
                                M1 MacBook Air review
                            </a>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
                                     alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png"
                                     alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-text flex-col-l-m p-l-130">
                    <h4>Newsletter</h4>
                    <p class="cl6">Subscribe to our Newsletter and get 20% off your first purchase</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="post">
                    <div class="newsletter-form flex-c-m p-t-14">
                        <input id="newsletter-email" type="email" placeholder="Your Email" required="required"
                               data-error="valid email is required.">
                        <button id="newsletter-submit" type="submit" class="newsletter_submit" value="submit">
                            Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section  -->
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
        
<script src="js/app.js"></script>

</body>
</html>
