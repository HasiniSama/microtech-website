<?php 
session_start();
include "db_conn.php";

?>
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
                    <?php if (isset($_SESSION['email']) && isset($_SESSION['fname'])
                            && isset($_SESSION['lname'])) {
                    ?>  <div class="drop-down-menu" id="account">
                            <a href="#" class="nav-link dropdown-toggle flex-c-m trans-04 p-lr-25" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo "My Account" ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <img src="images/profile-user.jpg" alt="">
                                <h6><?php echo $_SESSION['fname'] ?></h6>
                                <h6><?php echo $_SESSION['lname'] ?></h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="shopping_cart.php">My Cart</a>
                                <a class="dropdown-item" href="#">My Wishlist</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </div>
                    <?php }elseif(isset($_SESSION['admin_email']) && isset($_SESSION['admin_fname'])
                            && isset($_SESSION['admin_lname'])){?>
                        <div class="drop-down-menu" id="account">
                            <a href="#" class="nav-link dropdown-toggle flex-c-m trans-04 p-lr-25" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo "My Account" ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <img src="images/profile-user.jpg" alt="">
                                <p>Administrator</p>
                                <h6><?php echo $_SESSION['admin_fname'] ?></h6>
                                <h6><?php echo $_SESSION['admin_lname'] ?></h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="shopping_cart.php">My Cart</a>
                                <a class="dropdown-item" href="#">My Wishlist</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="admin_panel.php">Admin Panel</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </div>
                    <?php }else{?>
                            <a href="signin_page.php" class="flex-c-m trans-01 p-lr-25" id="account">
                                <?php echo "Login" ?>
                            </a>
                    <?php }?>
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
                            <li <?php if($page == 'home'){ echo 'class = "active"';} ?> >
                                <a href="index.php">Home</a>
                            </li>   
    
                            <li <?php if($page == 'shop'){ echo 'class = "active"';} ?>>
                                <a href="shopping_page.php">Shop</a>
                            </li>
    
                            <li <?php if($page == 'blog'){ echo 'class = "active"';} ?>>
                                <a href="blog.php">Blog</a>
                            </li>
    
                            <li <?php if($page == 'about'){ echo 'class = "active"';} ?>>
                                <a href="about.php">About</a>
                            </li>
    
                            <li <?php if($page == 'contact'){ echo 'class = "active"';} ?>>
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
                                <i class="zmdi zmdi-shopping-cart" <?php if($page == 'cart'){ echo 'id = "icon-active"';} ?>></i>
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

    <script src="js/app.js"></script>
    
