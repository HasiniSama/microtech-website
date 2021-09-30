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

session_write_close();

//get product id using incoming url
$productId = $_GET['item'];

//get that product details from database
$sqlQuery = "SELECT * FROM items WHERE item_id = ".$productId;
$result = $conn->query($sqlQuery);
$product = $result->fetch_array();

//get same category products for related products section
$sqlQuery2 = "SELECT * FROM items WHERE category = '".$product['category']."' AND item_id != ".$productId;
$result2 = $conn->query($sqlQuery2);

//getting current stock values
$sqlQuery4 = "SELECT * FROM stock WHERE item_id = ".$productId;
$result4 = $conn->query($sqlQuery4);
$stockItem = $result4->fetch_array();
$no_of_items = $stockItem['no_of_items'];

if(isset($_REQUEST['submit']) && isset($_SESSION['email'])){
    $qty = $_REQUEST['num-product'];

    if($no_of_items >= $qty) {
        //adding data to the cart
        $sqlQuery3 = "INSERT INTO cart values ('" . $email . "','" . $productId . "','" . $qty . "')";
        $result3 = $conn->query($sqlQuery3);

        //update stock values
        $new_no_of_items = $no_of_items - $qty;
        $sqlQuery5 = "UPDATE stock SET no_of_items = " . $new_no_of_items . " WHERE item_id = " . $productId;
        $result5 = $conn->query($sqlQuery5);
    }

} // redirect user to sign in
else if(isset($_REQUEST['submit'])){
    header("Location: signin_page.php?error=Please sign in to proceed!");
    exit();
}

// update current stock values again
$result4 = $conn->query($sqlQuery4);
$stockItem = $result4->fetch_array();
$no_of_items = $stockItem['no_of_items'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['item_name'] ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">
	<link rel="stylesheet" type="text/css" href="css/shopping_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>
    <!-- Header -->
    <?php $page = 'product'; include 'include/header.php'; ?>

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w  p-r-15 p-t-100">
            <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                Shop
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="shopping_page.php" class="stext-109 cl8 hov-cl1 trans-04">
                <?php echo $product['category'] ?>
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                <?php echo $product['item_name'] ?>
            </span>
        </div>
    </div>

    <!-- Product Detail -->
    <section class="sec-product-detail">
        <div class="container single-product">
            <div class="row">
                <div class="col-md-6 col-lg-7 product-image">
                    <img src="<?php echo $product['img_name1'] ?>" id = "ProductImg" alt="PRODUCT-IMG">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="<?php echo $product['img_name1'] ?>" alt="PRODUCT-IMG" class = "small-img">
                            </div>
                            <?php if($product['img_name2'] != NULL){ ?>
                            <div class="small-img-col">
                                <img src="<?php echo $product['img_name2'] ?>" alt="PRODUCT-IMG" class = "small-img">
                            </div>
                            <?php } ?>
                            <?php if($product['img_name3'] != NULL){ ?>
                            <div class="small-img-col">
                                <img src="<?php echo $product['img_name3'] ?>" alt="PRODUCT-IMG" class = "small-img">
                            </div>
                            <?php } ?>
                            <?php if($product['img_name4'] != NULL){ ?>
                            <div class="small-img-col">
                                <img src="<?php echo $product['img_name4'] ?>" alt="PRODUCT-IMG" class = "small-img">
                            </div>
                            <?php } ?>
                        </div>
                   
                </div>
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="product-section">
                        <h4 class="js-name-detail">
                            <?php echo $product['item_name'] ?>
                        </h4>
                        <span>
							LKR <?php echo $product['item_price'] ?>/-
						</span>
                        <p>
                            <?php echo $product['long_description'] ?>
                        </p>

                        <?php
                        if($no_of_items>0) { ?>
                            <p class = "in-stock"><?php echo "Item : <span>".$no_of_items." items in stock </span>" ?> </p>
                        <?php }
                        else{
                            echo "<p>Item : <span> Out of stock </span></p>";
                        }?>
                        

                        <div class="product-details">
                            <div class="product-options">
                                <div class="product-amount">
                                    <?php if($no_of_items>0) { ?>
                                        <form id="form" name="form" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                                            <div class="amount-counter">
                                                <div class="btn-num-product-down">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>

                                                <input class="num-product" type="number" name="num-product" id="num-product" value="1">

                                                <div class="btn-num-product-up">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>

                                            <button class="btn-add-cart add-to-cart-alert" name="submit" id="submit">
                                                Add to cart
                                            </button>
                                        </form>
                                    <?php }else{ ?>
                                            <div class="amount-counter">
                                                <div class="btn-num-product-out">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>

                                                <input class="num-product" type="number" name="num-product" id="num-product" value="1">

                                                <div class="btn-num-product-out">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>

                                            <button class="btn-out-cart add-to-cart-alert">
                                                Add to cart
                                            </button>
                                    <?php } ?>
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
                                    <?php echo $product['long_description'] ?>
                                </p>
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

                <!-- Products -->
                <?php $count = 1;
                while($row = $result2->fetch_array()){
                    if($count <=4 ){
                        ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                            <div class="block2">
                                <div class="block2-pic hov-img1">
                                    <img src="<?php echo $row['img_name1'] ?>" alt="IMG-PRODUCT">
                                    <a href="product_page.php?item=<?php echo $row['item_id'] ?>"
                                       class="block2-btn flex-c-m stext-103 cl0 size-102 bg3 bor2 hov-btn2 p-lr-15 trans-04">
                                        View
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="view.php" class="stext-104 cl4 hov-cl1 trans-04 p-b-6">
                                            <?php echo $row['item_name'] ?>
                                        </a>

                                        <span class="stext-105 cl3">
                                        LKR <?php echo $row['item_price'] ?>
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
                        <?php
                        $count++;
                    }
                } ?>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
	<?php include 'include/footer.php'; ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/bfc2cbc6c6.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script> 
        $('.add-to-cart-alert').click(function(e){
            var form = $(this).parents('#form');
            e.preventDefault();
            swal({
                title: "<?php //echo $product['item_name'] ?>",
                text: "Successfully added to cart!",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: '#717fe0',
                closeOnConfirm: false,
                closeOnCancel: false,
                html: false
            }).then(function (1) {
                if (isConfirm) {
                    form.submit(); // <--- submit form programmatically
                }
            });
        });
    </script>-->
    <script src="js/product.js"></script>
    <script src="js/app.js"></script>	

</body>
</html>