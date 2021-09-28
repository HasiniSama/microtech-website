<?php
include "db_conn.php";

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE category = 'smartphone'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $smartphone_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE category = 'smartwatch'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $smartwatch_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE category = 'tablet'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $tablet_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE category = 'laptop'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $laptop_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE category = 'audio'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $audio_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE category = 'accessories'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $accessories_revenue = mysqli_fetch_assoc($result_cat);

    

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE brand = 'apple'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $apple_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE brand = 'samsung'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $samsung_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE brand = 'huawei'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $huawei_revenue = mysqli_fetch_assoc($result_cat);

    $sql_cat= "SELECT SUM(revenue) AS total FROM orders WHERE order_id IN (SELECT order_id FROM orderdetails WHERE item_id IN (SELECT item_id FROM items WHERE brand = 'sony'))";
    $result_cat = mysqli_query($conn, $sql_cat);
    $sony_revenue = mysqli_fetch_assoc($result_cat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/utility.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/shopping_page.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

 <!-- Header -->
<?php $page = 'admin'; include 'include/header.php'; ?>

<!-- breadcrumb -->
<div class="container">
<div class="bread-crumb flex-w  p-r-15 p-t-100">
        <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Admin panel
        </span>
    </div>
</div>

<section class="top-summary">
    <div class="container">
        <div class="product-desc-section">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Summary Reports</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#orders" role="tab">Orders Table</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#products" role="tab">Products Table</a>
						</li>

                        <li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#users" role="tab">Users Table</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>
                                            <p>New Orders</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#orders" data-toggle="tab" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>LKR 53,OOO/-<sup style="font-size: 20px"></sup></h3>

                                        <p>Daily Revenue</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>User Registrations</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Unique Visitors</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>          
						    </div>
                            <div class="row pie-chart-content">
                                <div class="col-md-6">
                                    <div class="main-box">
                                        <h3>Total Sales by Catagory</h3>
                                        <canvas id="mychart1"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-box">
                                        <h3>Total Sales by Brand</h3>
                                        <canvas id="mychart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="tab-pane fade" id="orders" role="tabpanel">
							<!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Orders Table</h3>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 250px;">
                                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive">
                                            <table class="table table-head-fixed table-hover">
                                            <thead>
                                                <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Reason</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>183</td>
                                                <td>John Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-success">Approved</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>219</td>
                                                <td>Alexander Pierce</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-warning">Pending</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>657</td>
                                                <td>Bob Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-primary">Approved</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>175</td>
                                                <td>Mike Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-danger">Denied</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>134</td>
                                                <td>Jim Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-success">Approved</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>494</td>
                                                <td>Victoria Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-warning">Pending</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>832</td>
                                                <td>Michael Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-primary">Approved</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                                <tr>
                                                <td>982</td>
                                                <td>Rocky Doe</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-danger">Denied</span></td>
                                                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
						        </div>
                            </div>
                        </div>
						<div class="tab-pane fade" id="products" role="tabpanel">
							<!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Products Table</h3>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 250px;">
                                                    <input type="text" name="table_search" id="myInput" onkeyup="myFunction()" class="form-control float-right" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 250px;">
                                                    <input type="text" name="table_search" id="myInput" onkeyup="myFunction()" class="form-control float-right" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive">
                                            <table class="table table-head-fixed table-hover" id="myTable">
                                            <thead>
                                                <tr>
                                                <th style="width:20px !important">ID</th>
                                                <th style="width:150px !important">Item Name</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Item Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $sql="SELECT item_id, item_name, category, brand, item_price FROM items";
                                                $result = mysqli_query($conn, $sql);
                                                while($raw=$result->fetch_array()){	//item list 
                                            ?>
                                                <tr>
                                                    <td><?php echo $raw[0]?></td>
                                                    <td><?php echo $raw[1]?></td>
                                                    <td><?php echo $raw[2]?></td>
                                                    <td><?php echo $raw[3]?></td>
                                                    <td><?php echo $raw[4]?></td>
                                                </tr>
                                                    <?php
                                                        }
                                                    ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
						        </div>
                            </div>
						</div>
                        <div class="tab-pane fade" id="users" role="tabpanel">
							<!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Users Table</h3>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 250px;">
                                                    <input type="text" name="table_search" id="myInput" onkeyup="myFunction()" class="form-control float-right" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive">
                                            <table class="table table-head-fixed table-hover" id="myTable">
                                            <thead>
                                                <tr>
                                                <th>Email</th>
                                                <th>User Name</th>
                                                <th>Address</th>
                                                <th>No. of Orders</th>
                                                <th>Total Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $sql="SELECT item_id, item_name, category, brand, item_price FROM items";
                                                $result = mysqli_query($conn, $sql);
                                                while($raw=$result->fetch_array()){	//item list 
                                            ?>
                                                <tr>
                                                    <td><?php echo $raw[0]?></td>
                                                    <td><?php echo $raw[1]?></td>
                                                    <td><?php echo $raw[2]?></td>
                                                    <td><?php echo $raw[3]?></td>
                                                    <td><?php echo $raw[4]?></td>
                                                </tr>
                                                    <?php
                                                        }
                                                    ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
						        </div>
                            </div>
						</div>
					</div>
				</div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<?php include 'include/footer.php'; ?>
      
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
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
<script src="https://kit.fontawesome.com/bfc2cbc6c6.js" crossorigin="anonymous"></script>
       
<script src="js/app.js"></script>


<script>
        const Smart_Phones = <?php echo $smartphone_revenue['total'] ?>;
        const Smart_Watches = <?php echo $smartwatch_revenue['total'] ?>;
        const Tablets = <?php echo $tablet_revenue['total'] ?>;
        const Laptops = <?php echo $laptop_revenue['total'] ?>;
        const Audio = <?php echo $audio_revenue['total'] ?>;
        const Accessories = <?php echo $accessories_revenue['total'] ?>;
        
        const Apple = <?php echo $apple_revenue['total'] ?>;
        const Samsung = <?php echo $samsung_revenue['total'] ?>;
        const Huawei = <?php echo $huawei_revenue['total'] ?>;
        const Sony = <?php echo $sony_revenue['total'] ?>;
</script>

<script src="js/admin.js"></script>

</body>
</html>