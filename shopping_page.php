<?php
include "db_conn.php";

$category = "";
$brand = "";

//get search results
if(isset($_POST['searchSubmit'])) {
    $valueToSearch = $_POST['valueToSearch'];
    $sqlQuery = "SELECT * FROM items WHERE item_name LIKE '%".$valueToSearch."%'";
} //get both category and brand filtering results
else if(isset($_GET['category']) && isset($_GET['brand'])) {
    $category = $_GET['category'];
    $brand = $_GET['brand'];
    if($_GET['category'] == "" && $_GET['brand'] == ""){
        $sqlQuery = "SELECT * FROM items WHERE category LIKE '%' AND brand LIKE '%'";
    }
    else if($_GET['category'] == ""){
        $sqlQuery = "SELECT * FROM items WHERE category LIKE '%' AND brand LIKE '".$brand."'";
    }
    else if($_GET['brand'] == ""){
        $sqlQuery = "SELECT * FROM items WHERE category LIKE '".$category."' AND brand LIKE '%'";
    }
    else {
        $sqlQuery = "SELECT * FROM items WHERE category LIKE '".$category."' AND brand LIKE '".$brand."'";
    }
} // when no one set
else {
    $category = "";
    $brand = "";
    $sqlQuery = "SELECT * FROM `items`";
}



//get page number
if(isset($_REQUEST['page'])){
    $pageNo = $_REQUEST['page'];
}
else{
    $pageNo = 1;
}

////for testings
//$pageNo = 3;

$recPerPage = 12;

//calculate next page starting number
if($pageNo == 1){
    $pageStart = 0;
}
else{
    $pageStart = ($pageNo-1) * $recPerPage;
}

//get all page items
$result1 = $conn->query($sqlQuery);

//Getting number of items
$numberOfItems = $result1->num_rows;

// total pages
$totalPages = ceil ($numberOfItems / $recPerPage);

//get each page items
$sqlQuery2 = $sqlQuery."LIMIT ".$pageStart.",".$recPerPage;
$result2 = $conn->query($sqlQuery2);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>

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
        <?php if($category != NULL){ ?>
            <?php echo $category ?>
        <?php }else { ?>
            <?php echo "All Category" ?>
        <?php } ?>
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>   
        </span>

        <span class="stext-109 cl4">
        <?php if($brand != NULL){ ?>
            <?php echo $brand ?>
        <?php }else { ?>
            <?php echo "All Brands" ?>
        <?php } ?>
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
                        <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                            <input type="text" name="valueToSearch" id="valueToSearch" placeholder="Search...">
                            <button type="submit" name="searchSubmit" id="searchSubmit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop_sidebar_accordion">
                        <div class="card">
                            <span class="card-heading"> Categories </span>
                            <div class="card-body">
                                <div class="shop_sidebar_filter">
                                    <ul>
                                        <li><a href="shopping_page.php?category=&brand=<?php echo $brand ?>" >All categories</a></li>
                                        <li><a href="shopping_page.php?category=smartphone&brand=<?php echo $brand ?> ">Smart Phones</a></li>
                                        <li><a href="shopping_page.php?category=smartwatch&brand=<?php echo $brand ?>">Smart Watches</a></li>
                                        <li><a href="shopping_page.php?category=tablet&brand=<?php echo $brand ?>">Tablets</a></li>
                                        <li><a href="shopping_page.php?category=laptop&brand=<?php echo $brand ?>">Laptops</a></li>
                                        <li><a href="shopping_page.php?category=audio&brand=<?php echo $brand ?>">Audio</a></li>
                                        <li><a href="shopping_page.php?category=accessories&brand=<?php echo $brand ?>">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <span class="card-heading"> Brands </span>
                            <div class="card-body">
                                <div class="shop_sidebar_filter">
                                    <ul>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=">All brands</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=apple">Apple</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=samsung">Samsung</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=oneplus">OnePlus</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=huawei">Huawei</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=sony">Sony</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=xiaomi">Xiaomi</a></li>
                                        <li><a href="shopping_page.php?category=<?php echo $category ?>&brand=asus">Asus</a></li>
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
                    <?php while($row = $result2->fetch_array()){ ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product_item ">
                                <div class="product_item_pic set-bg " data-setbg="<?php echo $row['img_name1'] ?>">
                                </div>
                                <div class="product_item_text">
                                    <h5><?php echo $row['item_name'] ?></h5>
                                    <a href="product_page.php?item=<?php echo $row['item_id'] ?>"> View Item </a>
                                    <h6>LKR <?php echo $row['item_price'] ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!----------Page count----------->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_pagination">
                            <?php if($totalPages > 1){
                                for ( $k =1 ; $k <=$totalPages;$k++){ ?>
                                    <a class="<?php if($k==$pageNo){ echo "active"; } ?>"
                                       href="shopping_page.php?page=<?php echo $k ?>&category=<?php echo $category ?>&brand=<?php echo $brand ?>"><?php echo $k ?></a>
                                <?php   }
                            } ?>
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
