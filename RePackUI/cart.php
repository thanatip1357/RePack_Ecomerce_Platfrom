
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


    <style>
        .container-myorders {
            font-family: 'Inter', sans-serif;
            max-width: 1000px;
            margin: auto;
            overflow: hidden;
        }

        .card {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .card-body {
            padding: 20px;
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 123, 255, 0.1);
        }

        /* Zusätzliche Stile */
        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .py-3 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .px-4 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .font-weight-semibold {
            font-weight: 600;
        }
    </style>
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


      <section class="site-banner jarallax min-height300 padding-large" style="background: url(images/cart.jpg) no-repeat; background-position: top;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-title">Cart</h1>
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
    <?php
     $servername = "localhost";
     $username = "root";
     $password = '';
     $dbname = "repack";
   
     // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname,3308);
   $rs1= mysqli_query($conn, "select * from cart where User_ID=$_COOKIE[id]");
   $array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);

if (isset($array)) {

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Set default quantity to 1 and maximum quantity to 5

    // Display the product details in a styled table with a dropdown for quantity
    echo '<style>
            table {
                width: 70%;
                border-collapse: collapse;
                margin: auto;
                margin-top: 20px;
            }
            th, td {
                padding: 15px;
                text-align: center;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
            .quantity-dropdown {
                width: 80px;
                margin: auto;
            }
            .quantity-dropdown select {
                font-size: 16px;
                padding: 5px;
            }
          </style>';

    echo '<table>';
    echo '<tr>';
    echo '<th>Product Name</th>';
    echo '<th>Product Price</th>';
    echo '<th>Quantity</th>';
    echo '<th>Total</th>';
    echo '</tr>';
    foreach($array as $value):
    echo '<tr>';
    echo '<td>' . $value['Name'] . '</td>';
    echo '<td>' . $value['Unit_Price'] . '</td>';
    echo '<td>' . $value['Quantity'] . '</td>';
    echo '<td>' . $value['TotalP'] . '</td>';
    endforeach;

    // Populate dropdown with quantity options


  

    // JavaScript for updating the total when the quantity changes
    echo '<script>
            function updateTotal() {
                var quantityElement = document.getElementById("quantity");
                var totalElement = document.getElementById("total");
                var selectedQuantity = parseInt(quantityElement.value);
              
                totalElement.innerHTML =  newTotal;
            }
          </script>';
} else {
    // Handle case where parameters are not set
    echo '<p>No product details found.</p>';
}
?>


<div class="float-center mt-5">
                <div class="d-flex justify-content-center">
                    <a href="index.php"><button type="button" class="btn btn-lg btn-checkout btn-white btn-custom mt-2 text-black">Back to Home </button></a>
                    <a href="checkout.php"><button type="button" class="btn btn-lg btn-checkout btn-white text-black">Checkout</button></a>
                    <a href="dbdelete.php?id=<?=$_COOKIE['id']?>"><button type="button" class="btn btn-lg btn-checkout btn-white btn-custom mt-2 text-black">Empty Cart</button></a>
                </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>