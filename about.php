<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/about.css"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

 <!-- Header -->
 <?php $page = 'about'; include 'include/header.php'; ?>

<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w  p-r-15 p-t-100">
        <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            About
        </span>
    </div>
</div>
<!-- Header Section End -->


<!-- About Section Begin -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic">


                    <img src="images/about/macbook.jpg" class="container-fluid" alt="">


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <div class="about__item ">
                    <h4>Who We Are ?</h4>
                    <p>We're a company that specializes in providing electronic hardware solutions to help you
                        achieve your next big idea or strategy. We are still growing our business, and we anticipate
                        that our website will soon be your one-stop shop for all electronic needs. If you have any
                        questions, please send us an email or give us a call; we would be delighted to hear from you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>What We Do ?</h4>
                    <p>We understand your technology/hardware requirements and want to make things as simple as possible
                        for you. You can buy in-stock things and have them delivered in two days, or you can pre-order
                        items that aren't in stock and we'll do our best to get them for you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Why Choose Us?</h4>
                    <p>MicroTech understands how busy we all are, which is why we are giving a free delivery service
                        islandwide. MicroTech is committed to being ahead of the competition, which means we provide the
                        best products, as well as a variety of other unique services. Come to MicroTech the next time
                        you need an electronic item and experience the difference.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="testimonial__text">
                    <span class="icon_quotations"></span>
                    <p>“MicroTech is always totally accurate as far as shipping our product for receipt on our requested
                        date, not one day late. It's a great reassurance that I can count on MicroTech all the time when
                        other vendors can be real headaches!"”
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__pic">
                            <img src="images/about/testimonial-author.jpg" alt="">
                        </div>
                        <div class="testimonial__author__text">
                            <h5>Kelli Joyce</h5>
                            <p>Buyer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="testimonial__pic set-bg" data-setbg="images/about/phone.jpg"
                     style="background-image: url(&quot;images/about/phone.jpg&quot;);"></div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->


<!-- Counter Section Begin -->
<section class="counter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">102</h2>
                    </div>
                    <span>Our <br />Clients</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">15</h2>
                    </div>
                    <span>Total <br />Brands</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">10</h2>
                    </div>
                    <span>Outreach <br />Partners</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">98</h2>
                        <strong>%</strong>
                    </div>
                    <span>Happy <br />Customer</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->





<!-- Team Section Begin -->
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
<!--                    <span>Our Team</span>-->
                    <h2>Meet Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="images/about/team-1.jpg" alt="">
                    <h4>Pasan Jayawardene</h4>
                    <span>Web Dev</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="images/about/team-2.jpg" alt="">
                    <h4>Hasini Samarathunga</h4>
                    <span>Web Dev</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="images/about/team-3.jpg" alt="">
                    <h4>Krishan Shamod</h4>
                    <span>Web Dev</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="images/about/team-4.jpg" alt="">
                    <h4>Kajanthan</h4>
                    <span>Web Dev</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->






<!-- Client Section Begin -->
<section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Partners</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-1.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-2.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-3.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-4.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-5.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-6.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-7.png" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="images/clients/client-8.png" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- Client Section End -->















<!-- Footer Section -->
<?php include 'include/footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/bfc2cbc6c6.js" crossorigin="anonymous"></script>

        <script src="js/about.js"></script>
        <script src="js/shopping_page.js"></script>
        <script src="js/app.js"></script>

</body>
</html>
