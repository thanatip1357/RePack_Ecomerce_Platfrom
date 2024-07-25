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
                if(isset($_COOKIE)){?>
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


    <section class="site-banner jarallax min-height300 padding-large" style="background: url(images/pfand.jpg) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Pfand Collection</h1>
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
    <section id="selling-products" class="product-store bg-light-grey padding-large">
            <div class="container">
              <div class="section-header">
                <h2 class="section-title">Shop Our Pfand Collection</h2>
              </div>
              
              <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "repack";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname,3308);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Query to fetch products from the 'products' table
          $sql = "SELECT * FROM products where Type='Pfand'";
          $result = $conn->query($sql);

          // Check if there are products in the database
          if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="product-item col-lg-3 col-md-6 col-sm-6">';
                  echo '<div class="image-holder">';
                  echo '<img src="pimages/' . $row['Image'] . '" alt="' . $row['P_Name'] . '" class="product-image">';
                  echo '</div>';
                  echo '<div class="product-detail">';
                  echo '<h3 class="product-title"><a href="#">' . $row['P_Name'] . '</a></h3>';
                  echo '<div class="item-price text-primary">' . $row['Price'] . '</div>';
                  echo '</div>';
                  ?><a href="db.php?id=<?=$row['P_ID']?>" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i></a>;
                        <?php
                  echo '</div>';
              }
          } else {
              echo "0 results";
          }

          // Close the database connection
          $conn->close();
          ?>
          
    </section>
    

    <section id="shipping-information">
      <hr>
      <div class="container">
        <div class="row d-flex flex-wrap align-items-center justify-content-between">
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-truck"></i>
              <h4 class="block-title">
                <strong>Free shipping</strong> Over 2000
              </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-return"></i>
              <h4 class="block-title">
                <strong>Money back</strong> Return within 7 days
              </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-tags1"></i>
              <h4 class="block-title">
                <strong>Buy and return the packaging for </strong> Pfand Rewards!
              </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-help_outline"></i>
              <h4 class="block-title">
                <strong>Any questions?</strong> experts are ready
              </h4>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <footer id="footer">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">RePack.</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="about.html">About us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Conditions </a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.html">Our Journals</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Careers</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Affiliate Programme</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">RePack Press</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="faqs.html">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.html">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@repack.com</a>
                </p>
                <p>Do you need assistance? Give us a call. <br>
                  <strong>+91 8240266922</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Grateful 2024</h5>
                <p>As we ring in the new year, the RePack team wants to take a moment to express our sincere gratitude for your incredible support in 2023. You've chosen to shop with us, return your packaging, and embrace a more sustainable way of living, and we couldn't be more grateful for your partnership.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube-play"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance-square"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>

    <div id="footer-bottom">
      <div class="container">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
          <div class="copyright">
           
          </div>
          <div class="payment-method">
            <p>Payment options :</p>
            <div class="card-wrap">
              <img src="images/visa-icon.jpg" alt="visa">
              <img src="images/mastercard.png" alt="mastercard">
              <img src="images/american-express.jpg" alt="american-express">
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>