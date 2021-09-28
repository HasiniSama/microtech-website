<?php
include "db_conn.php";

//get order details for orders table
$ordersSqlQuery = "SELECT * FROM orders";
$orders = $conn->query($ordersSqlQuery);

//get product details for products table
$productsSqlQuery = "SELECT * FROM items";
$products = $conn->query($productsSqlQuery);

//get users details for users table
$usersSqlQuery = "SELECT * FROM users,address WHERE email=usermail";
$users = $conn->query($usersSqlQuery);

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
                                                <th>Order ID</th>
                                                <th>User Email</th>
                                                <th>Date and Time</th>
                                                <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($row = $orders->fetch_array()){ ?>
                                                <tr>
                                                <td><?php echo $row['order_id'] ?></td>
                                                <td><?php echo $row['user_email'] ?></td>
                                                <td><?php echo $row['order_time'] ?></td>
                                                <td><?php echo $row['revenue'] ?></td>
                                                </tr>
                                            <?php } ?>
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
                                                <th>Item Name</th>
                                                <th style="width:40px !important">Category</th>
                                                <th style="width:40px !important">Brand</th>
                                                <th style="width:40px !important">Item Price (LKR) </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($row = $products->fetch_array()){ ?>
                                                <tr>
                                                    <td><?php echo $row['item_id'] ?></td>
                                                    <td><?php echo $row['item_name'] ?></td>
                                                    <td><?php echo $row['category'] ?></td>
                                                    <td><?php echo $row['brand'] ?></td>
                                                    <td><?php echo $row['item_price'] ?></td>
                                                </tr>
                                            <?php } ?>
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
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($row = $users->fetch_array()){ ?>
                                                <tr>
                                                    <td><?php echo $row['f_name']." ".$row['l_name'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['addr_line1'].", ".$row['addr_line2'].", ".$row['city'].", ".$row['country'].", ".$row['zip'] ?></td>
                                                </tr>
                                            <?php } ?>
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
<script src="js/admin.js"></script>

</body>
</html>