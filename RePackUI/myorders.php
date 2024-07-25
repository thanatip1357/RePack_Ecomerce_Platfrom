<?php

session_start();
$message = '';

$servername = "localhost";
$username = "root";
$password = '';
$dbname = "repack";


$con = new mysqli($servername, $username, $password, $dbname,3308);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'returnPacket') {
    $_SESSION['message'] = "Okay! You’re GOOD TO RETURN YOUR PACKET TO BE RePacked!";
   
   
    $packagingID = mysqli_real_escape_string($con, $_POST['packagingID']);
    $sql = "UPDATE packaging SET Return_Status = 'Returned' WHERE P_ID = '$packagingID'";
 header("Location: myorders.php"); 
   if ($con->query($sql) === TRUE) {
        if ($con->affected_rows > 0) {
            $message = "Okay! You’re GOOD TO RETURN YOUR PACKET TO BE RePacked!";
        } else {
            $message = "Packet is already returned or doesn't exist.";
        }
    } else {
        $message = "Error updating record: " . $con->error;
    } 
    exit;
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RePack. - My Orders</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

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
                            <p>E-commerce Redesigned and Revamped</p>
                        </div>
                        <div class="col-md-4 col-sm-12 user-items">
                            <ul class="d-flex justify-content-end list-unstyled">
                                <li>
                                    <a href="login.html">
                                        <i class="icon icon-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <i class="icon icon-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="myorders.html">
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
                                <a href="index.html">
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
    <section class="site-banner jarallax min-height300 padding-large"
        style="background: url(images/myorders.png) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">My Orders</h1>
                    <div class="breadcrumbs">
                        <span class="item">
                            <a href="index.html">Home /</a>
                        </span>
                        <span class="item">Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-myorders px-3 my-5 clearfix">
        <!-- Current Orders section -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="mb-4">Current Orders</h2>
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                                <th class="text-center align-middle py-3 px-0" style="width: 40px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
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

                            $rs1 = mysqli_query($conn, "SELECT * from ordered_product where Status='Active'");
                            $array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
                            
                            $rs2 = mysqli_query($conn, "SELECT * from ordered_product where Status='Completed'");
                            $array2 = mysqli_fetch_all($rs2, MYSQLI_ASSOC);

                            foreach ($array as $row) {
                                // Produkt-Container
                                echo " <tr>";
                                echo "<td class='p-4'>";
                                echo "<a href='#' class='d-block text-dark'>" . htmlspecialchars($row['Product_Name']) . "</a>";
                                echo "</div>";
                                echo " </div>";
                                echo " </td>";
                                echo "<td class='text-right font-weight-semibold align-middle p-4'>" . htmlspecialchars($row['Unit_Price']) . "</td>";
                                echo "<td class='align-middle p-4'>" . htmlspecialchars($row['Quantity']) . "</td>";
                                echo "<td class='text-right font-weight-semibold align-middle p-4'>" . htmlspecialchars($row['Total_Price']) . "</td>";
                                echo "<td class='text-center align-middle px-0'>" . htmlspecialchars($row['Status']) . "</td>";
                                echo " </tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- / Current Orders section -->

        <!-- Previous Orders section -->
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4">Previous Orders</h2>
                <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success" role="alert">
                  <?php
                     echo $_SESSION['message'];
                     unset($_SESSION['message']); // Löschen der Nachricht aus der Session
                   ?>
                </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <th class="text-center  py-3 px-4" style="min-width: 400px;">Product Name</th>
                                <th class="text-center py-3 px-4" style="width: 100px;">Price</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                                <th class="text-center py-3 px-4" style="width: 100px;">Total</th>
                                <th class="text-center align-middle py-3 px-0" style="width: 40px;">Status</th>
                                <th class="text-center align-middle py-3 px-0" style="width: 40px;"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

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

                            $rs1 = mysqli_query($conn, "SELECT o.Status as status, op.Quantity as quantity, op.Unit_Price as price, pr.P_Name as name, 
                            pr.Description as description, o.Packaging_ID as packagingID, pa.return_status as returnstatus, op.Total_Price as total 
                            FROM orders o join packaging pa on o.packaging_ID = pa.p_ID join products pr on pa.P_ID = pr.P_ID 
                            join ordered_product op on o.O_ID = op.Order_Id where o.Status like '%com%';");
                            $array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);


                            foreach ($array2 as $row) {
                                echo " <tr>";
                                echo "<td class='p-4'>";
                                echo "<a href='#' class='d-block text-dark'>" . htmlspecialchars($row['Product_Name']) . "</a>";
                                echo "</div>";
                                echo " </div>";
                                echo " </td>";
                                echo "<td class='text-right font-weight-semibold align-middle p-4'>" . htmlspecialchars($row['Unit_Price']) . "</td>";
                                echo "<td class='align-middle p-4'>" . htmlspecialchars($row['Quantity']) . "</td>";
                                echo "<td class='text-right font-weight-semibold align-middle p-4'>" . htmlspecialchars($row['Total_Price']) . "</td>";
                                echo "<td class='text-center align-middle px-0'>" . htmlspecialchars($row['Status']) . "</td>";
 ?>
 <td>
                                <form method='POST' action=''> 
                                  <input type="hidden" name="packagingID" value="<?php echo htmlspecialchars($row['Status']); ?>">
                                    <input type="hidden" name="action" value="returnPacket">
                                    <button type="submit">Return</button>
                                   
                                </form></td>
 <?php } ?>
                                </tr>
                           
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
</body>

</html>