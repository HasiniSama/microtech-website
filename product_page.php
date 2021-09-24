<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css">
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
			<div class="wrap-menu how-shadow1">
				<nav class="limiter-menu container">
					
					<!-- Logo -->		
					<a href="#" class="logo">
						<img src="images/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu -->
					<div class="menu">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="shopping_page.php">Shop</a>
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
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="2">
							<a href="shopping_cart.php">
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

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w  p-r-15 p-t-100">
            <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                Shop
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="shopping_page.php" class="stext-109 cl8 hov-cl1 trans-04">
                Smartphones
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Samsung Galaxy Note20 5G
            </span>
        </div>
    </div>

    <!-- Product Detail -->
	<section class="sec-product-detail">
		<div class="container single-product">
			<div class="row">
				<div class="col-md-6 col-lg-7 product-image">
					<img src="images/products/13.0.webp" id = "ProductImg" alt="PRODUCT-IMG">
					<div class="small-img-row">
						<div class="small-img-col">
							<img src="images/products/13.0.webp" alt="PRODUCT-IMG" class = "small-img">
						</div>
						<div class="small-img-col">
							<img src="images/products/13.1.webp" alt="PRODUCT-IMG" class = "small-img">
						</div>
						<div class="small-img-col">
							<img src="images/products/13.2.jpeg" alt="PRODUCT-IMG" class = "small-img">
						</div>
						<div class="small-img-col">
							<img src="images/products/13.3.webp" alt="PRODUCT-IMG" class = "small-img">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="product-section">
						<h4 class="js-name-detail">
							Samsung Galaxy Note20 5G
						</h4>
						<span>
							LKR. 174,990/-
						</span>
						<p>
								It's anything but your average smartphone.
								Introducing the Powerphone that forever changes how you work and play.
						</p>
						
						<div class="product-details">
							<div class="product-options">
								<div class="product-color-header respon6">
									Color
								</div>
								<div class="product-color-options">
									<div class="color-options">
										<select class="form-select" id = form-color aria-label=".form-select-sm example">
											<option selected>Choose an option</option>
											<option value="1">Black</option>
											<option value="2">Grey</option>
											<option value="3">White</option>
										</select>	
									</div>
								</div>
							</div>

							<div class="product-options">
								<div class="product-amount">
									<div class="amount-counter">
										<div class="btn-num-product-down">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="num-product" type="number" name="num-product" value="1">

										<div class="btn-num-product-up">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button class="btn-add-cart js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
						</div>

						<div class="addtional-options">
							<div class="add-to-wishlist">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>
							<h6>Add to wishlist</h6>
						</div>
						
					</div>
				</div>
			</div>

			<div class="product-desc-section">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">

						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2">
								<p>
								It's the ultimate gaming experience that goes where you go. It's a director-grade 8K video camera. It's a multitasking computer suite. It's anything but your average smartphone.
								Introducing the Powerphone that forever changes how you work and play.
								</p>
							</div>
						</div>

						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 adi-info">
									<ul>
										<li>
											<span>Display</span>
											<span>6.7</span>
										</li>
										<li>
											<span>RAM</span>
											<span>8 GB</span>
										</li>
										<li>
											<span>Storage</span>
											<span>128GB/256GB</span>
										</li>
										<li>
											<span>Camera</span>
											<span>64MP</span>
										</li>
										<li>
											<span>Battery</span>
											<span>4300 mAh</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 review-tab">
									<div class="review-section">
										<div class="other-reviews-section">
											<div class="other-review">
												<div class="header">
													<span id="reviewer">
														Krishan Shamod
													</span>
													<span id="rating">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
												</div>

												<p id="other-review">
													Very phone.  Much style. Stylish pen is exceptionally good. 10/10 would recommend.
												</p>
											</div>
										</div>
										
										<!-- Add a review -->
										<form>
											<h5>Add a review</h5>
											<p> Your email address will not be published. Required fields are marked *</p>

											<div id="your-rating">
												<span class="your-rating-header">
													Your Rating
												</span>
												<span class="wrap-rating">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
											</div>

											<div class="row review-area">
												<div class="col-12">
													<label for="review">Your review</label>
													<textarea id="review" name="review"></textarea>
												</div>

												<div class="col-sm-6 txt-box">
													<label for="name">Name</label>
													<input id="name" type="text" name="name">
												</div>

												<div class="col-sm-6 txt-box">
													<label for="email">Email</label>
													<input id="email" type="text" name="email">
												</div>
											</div>

											<button class="btn-add-cart">
												Submit
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- Related Products -->
	<section class="relate-product-section">
		<div class="container">
			<div class="relate-product-header">
				<h3 class="ltext-103 cl2 txt-center">
					Related Products
				</h3>
			</div>
			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block -->
					<div class="block2">
						<div class="block2-pic hov-img1">
							<img src="images/products/4.jpg" alt="IMG-PRODUCT">
							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
									OnePlus Nord CE 5G
								</a>

								<span class="stext-105 cl3">
									LKR 89,990.00
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block -->
					<div class="block2">
						<div class="block2-pic hov-img1">
							<img src="images/products/1.jpg" alt="IMG-PRODUCT">
							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
									iPhone 12 Pro
								</a>

								<span class="stext-105 cl3">
									LKR 291,900.00
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block -->
					<div class="block2">
						<div class="block2-pic hov-img1">
							<img src="images/products/10.jpeg" alt="IMG-PRODUCT">
							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
									Apple MacBook Air M1
								</a>

								<span class="stext-105 cl3">
									LKR 249,900.00
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block -->
					<div class="block2">
						<div class="block2-pic hov-img1">
							<img src="images/products/11.jpg" alt="IMG-PRODUCT">
							<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
									MacBook Pro M1
								</a>

								<span class="stext-105 cl3">
									LKR 377,000.00
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
						<a href="#"><img src="images/payment_icons.png" alt=""></a>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/bfc2cbc6c6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
    <script src="js/product.js"></script>
    <script src="js/app.js"></script>	

</body>
</html>