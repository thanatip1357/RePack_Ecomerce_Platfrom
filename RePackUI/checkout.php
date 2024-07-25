<?php
  //setcookie('id', $_GET['id']);
  $servername = "localhost";
  $username = "root";
  $password = '';
  $dbname = "repack";

  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3308);
if(isset($_GET['id'])){
$rs1= mysqli_query($conn, "select * from customer where CustID=$_GET[id]");
$array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
// echo "-------------------0---------------------";
// print_r($array)
}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RePack. - E-commerce Redesigned and Revamped</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    <header id="header">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <?php
                if(isset($array)){?>
                <p>Welcome <strong><?=$_COOKIE["name"]?></strong>
                <?php
                }else{?>
                <p>Welcome <strong>User</strong>
                <?php
                }
                ?>
                </p>
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p>E-commerce Redisigned and Revamped</p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <li>
                    <a href="login.php">
                      <i class="icon icon-user"></i>
                    </a>
                  </li>
                  <li>
                    <a href="cart.php">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  <li>
                    <a href="myorders.php">
                      <i class="icon icon-heart"></i>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.php">
                    <img src="repacklogo.png" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <div class="navbar">

                      <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                        <ul class="menu-list">
    
                          <li class="menu-item has-sub">
                            <li><a href="index.php" class="item-anchor active d-flex align-item-center" data-effect="Home">Home</a></li>
                            <li><a href="login.php" class="item-anchor">Login<span class="text-primary"></span></a></li>
                          </li>
    
                          <li><a href="about.php" class="item-anchor" data-effect="About">About Us</a></li>
    
                          <li class="menu-item has-sub">
                            <a href="shop.php" class="item-anchor d-flex align-item-center" data-effect="Shop">Shop<i class="icon icon-chevron-down"></i></a>
                            <ul class="submenu">
                              <li><a href="shop.php" class="item-anchor">Shop</a></li>
                              
                              <li><a href="shop-grid.php" class="item-anchor">Pfand Products<span class="text-primary"></span></a></li>
                              <li><a href="shop-list.php" class="item-anchor">Not Pfand Products<span class="text-primary"> </span></a></li>
                              
                              <li><a href="cart.php" class="item-anchor">Cart<span class="text-primary"> </span></a></li>
                              <li><a href="myorders.php" class="item-anchor">My Orders<span class="text-primary"> </span></a></li>
                              <li><a href="checkout.php" class="item-anchor">Checkout<span class="text-primary"> </span></a></li>
                            </ul>
                          </li>
    
                          <li class="menu-item has-sub">
                        <a href="packingdetail.php" class="item-anchor d-flex align-item-center" data-effect="Pages">Packaging & More<i class="icon icon-chevron-down"></i></a>
                            <ul class="submenu">
                            <li><a href="packingdetail.php" class="item-anchor">Packaging Details<span class="text-primary"></span></a></li>
                            <li><a href="delivery-training.php" class="item-anchor">Our Delivery Personnel Training <span class="text-primary"></span></a></li>
                            <li><a href="faqs.php" class="item-anchor">FAQs</a></li>
                            <li><a href="contact.php" class="item-anchor" data-effect="Contact">Contact Us</a></li>
                            
                            </ul>
                          </li>
    
                          <li class="menu-item has-sub">
                            <a href="blog.php" class="item-anchor d-flex align-item-center" data-effect="Blog">Blog<i class="icon icon-chevron-down"></i></a>
                            <ul class="submenu">
                              <li><a href="blog.php" class="item-anchor">Blog</a></li>
                              <li><a href="blog-sidebar.php" class="item-anchor">SDG Goals Blog<span class="text-primary"></span></a></li>
                              
                              
                            </ul>
                      </li>

                      <li class="menu-item has-sub">
                            <a href="index.php" class="item-anchor d-flex align-item-center" data-effect="Shop">User Page<i class="icon icon-chevron-down"></i></a>
                            <ul class="submenu">
                              <li><a href="login.php" class="item-anchor">Logout</a></li>
                              <li><a href="usersettings.php" class="item-anchor">Account Settings<span class="text-primary"> </span></a></li>
                  
                            </ul>
                          </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>


      <section class="site-banner jarallax min-height300 padding-large" style="background: url(images/checkout.png) no-repeat; background-position: top;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-title" style = "background: linear-gradient(315deg, #2d3436 0%, #000000 74%); color:transparent; -webkit-background-clip:text; ">Checkout</h1>
              <div class="breadcrumbs">
                <span class="item">
                  <a href="index.php">Home /</a>
                </span>
                <span class="item">Shop</span>
              </div>
            </div>
          </div>
        </div>
      </section>
  <div class="container px-3 my-5 clearfix">
    <!-- Checkout form section -->
    <div class="card">
      <div class="card-body">
        <h2 class="mb-4">Checkout</h2>
        <form id="checkoutForm" action="process_checkout.php" method="post">
          <!-- Add your checkout form fields here (e.g., name, address, payment details) -->

          <!-- Example input field -->
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
          </div>

          <!-- Repeat similar input fields for other checkout details -->

          <button type="submit" class="btn btn-primary">Proceed to Payment</button>
        </form>
      </div>
    </div>
    <!-- / Checkout form section -->

    <!-- Order Summary section -->
    <div class="card mt-4">
      <div class="card-body">
        <h2 class="mb-4">Order Summary</h2>
        <div class="table-responsive">
          <table class="table table-bordered m-0">
            <thead>
              <tr>
                <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
              </tr>
            </thead>
            <tbody>
              <!-- Replace the following rows with your cart items -->
              <tr>
                <td class="p-4">
                  <div class="media align-items-center">
                    <img src="path/to/product-image.jpg" class="d-block ui-w-40 ui-bordered mr-4" alt="Product Image">
                    <div class="media-body">
                      <a href="#" class="d-block text-dark">Product Name</a>
                      <!-- Add product details here -->
                    </div>
                  </div>
                </td>
                <td class="text-right font-weight-semibold align-middle p-4">$XX.XX</td>
                <td class="align-middle p-4">1</td>
                <td class="text-right font-weight-semibold align-middle p-4">$XX.XX</td>
              </tr>
              <!-- Repeat similar rows for each cart item -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- / Order Summary section -->
  </div>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
