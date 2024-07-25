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

  <?php
  // Establish database connection
  $servername = "localhost";
  $username = "root";
  $password = '';
  $dbname = "repack";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname,3308);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $message = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") { //&& isset($_POST['CustID'])) {
  
    $custId = $conn->real_escape_string($_POST['CustID']);
    $name = $conn->real_escape_string($_POST['Name']);
    $email = $conn->real_escape_string($_POST['Email']);
    $primaryLocationID = $conn->real_escape_string($_POST['Primary_LocationID']);
    $dob = $conn->real_escape_string($_POST['DOB']);

    $date_format = 'Y-m-d';
    $d = DateTime::createFromFormat($date_format, $dob);
    if ($d && $d->format($date_format) == $dob) {
      $updateSql = "UPDATE customer SET Name = '$name', Email = '$email', Primary_LocationID = $primaryLocationID, DOB = '$dob' WHERE CustID = $_COOKIE[id]";

      if ($conn->query($updateSql) === TRUE) {
        if ($conn->affected_rows > 0) {
          $message = "Record updated successfully.";
        } else {
          $message = "No changes were made.";
        }
      } else {
        $message = "Error updating record: " . $conn->error;
      }
    } else {
      $message = "Invalid date format. Please use YYYY-MM-DD.";
    }
  }

  $userData = [];
  //if (isset($_GET['CustID']) || isset($_POST['CustID'])) {
  //  $custId = isset($_GET['CustID']) ? $_GET['CustID'] : $_POST['CustID'];
  // $custId = $conn->real_escape_string($custId);
  $sql = "SELECT CustID, Name, Email, Rewards, Primary_LocationID, DOB FROM customer WHERE CustID = $_COOKIE[id]";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
  } else {
    $message = "0 results found.";
  }
  //}
  
  $conn->close();
  ?>

  <head>
    <meta charset="UTF-8">
    <title>Customer Account Settings</title>
    <style>
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        justify-content: center;
      }

      .container-user {
        width: 100%;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        /* Adjust this value if you want a wider or narrower form */
        margin: -20px auto 0;
        background-color: #f0f2f5;
      }

      h2 {
        color: #333;
        text-align: center;
        margin-bottom: 25px;
      }

      form {
        display: flex;
        flex-direction: column;
      }

      label {
        margin-bottom: 8px;
        font-size: 16px;
        color: #666;
      }

      input[type="text"],
      input[type="email"],
      input[type="number"],
      input[type="date"],
      input[type="submit"] {
        padding: 10px 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ddd;
        width: calc(100% - 30px);
        background-color: white;
      }

      input[type="text"]:focus,
      input[type="email"]:focus,
      input[type="number"]:focus,
      input[type="date"]:focus {
        border-color: #007bff;
        background-color: white;
        outline: none;
      }

      input[type="submit"] {
        background-color: #609ad6;
        color: white;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      input[type="submit"]:hover {
        background-color: #6da0d6;
      }

      .message {
        text-align: center;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
      }

      .form-group {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
      }

      .form-group label {
        margin-left: 10px;
      }

      .form-group input[type="text"],
      .form-group input[type="email"],
      .form-group input[type="number"],
      .form-group input[type="date"] {
        flex-grow: 1;
        margin-right: 10px;
      }

      .form-group label {
        flex-basis: 20%;
        text-align: left;
      }

      .form-group input,
      .form-group select {
        width: auto;
        flex-grow: 2;
      }
    </style>
  </head>

  <body>

    <div class="container-user">
      <h2>Your Customer Settings</h2>

      <?php if (!empty($message)): ?>
        <p>
          <?php echo $message; ?>
        </p>
      <?php endif; ?>

      <?php if ($userData): ?>

        <form method="POST">
          <input type="hidden" name="CustID" value="<?php echo $userData['CustID']; ?>">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" value="<?php echo $userData['Name']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" value="<?php echo $userData['Email']; ?>">
          </div>
          <div class="form-group">
            <label for="primary_location">Location ID:</label>
            <input type="number" id="primary_location" name="Primary_LocationID"
              value="<?php echo $userData['Primary_LocationID']; ?>">
          </div>
          <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="DOB" value="<?php echo $userData['DOB']; ?>">
          </div>

          <input type="submit" value="Update Information">
        </form>
      <?php else: ?>
        <p>User data could not be loaded.</p>
      <?php endif; ?>
    </div>

    <br>
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
                <p>As we ring in the new year, the RePack team wants to take a moment to express our sincere gratitude
                  for your incredible support in 2023. You've chosen to shop with us, return your packaging, and embrace
                  a more sustainable way of living, and we couldn't be more grateful for your partnership.</p>
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