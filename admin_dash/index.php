<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "repack";
$port = 3308; // Specify the port if it's not the default one

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users_admin WHERE User_ID = ?");
    $stmt->bind_param("i", $_GET['id']); // 'i' specifies the data type as integer

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $array = $result->fetch_all(MYSQLI_ASSOC);
        print_r($array);

        // Set cookies
        $cookie_name2 = "id";
        $cookie_value2 = $array[0]['User_ID'];
        setcookie($cookie_name2, $cookie_value2);

        $cookie_name1 = "name";
        $cookie_value1 = $array[0]['Name'];
        setcookie($cookie_name1, $cookie_value1);
    } else {
        echo "0 results";
    }

    $stmt->close();
} else {
    echo "ID not provided.";
}

$conn->close();
?>
<html lang="en"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RePack</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png">
<style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/repacklogo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-language dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-language-icon">
                <i class="flag-icon flag-icon-us" title="us" id="us"></i>
              </div>
              <div class="nav-language-text">
                <p class="mb-1 text-black">English</p>
              </div>
            </a>
            
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            
            <div class="nav-profile-text">
              <p class="mb-1 text-black">
                <?php 
                if (isset($_COOKIE['name'])) {
                    echo htmlspecialchars($_COOKIE['name']);
                } else {
                    echo 'Name not set'; 
                }
                ?>
              </p>
            </div>

            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
              
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="pages/ui-features/profile.php">
                  <span>Profile</span>
                  <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ml-1"></i>
                  </span>
                </a>
                
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="pages/samples/login.php">
                  <span>Log Out</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>
          
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">
              <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php">Log In</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
              <span class="menu-title">Sales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/sale/total_sales.php">Total Sales</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/sale/order_status.php">Order Status</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/sale/customer_list.php">Customer List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
              <span class="menu-title">Purchases</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/purchases/product_list.php"> Product List (stock info)</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/purchases/product_line.php">Product Line</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
          
          </li>
          
          
         
          
          
          
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="pages/samples/login.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
              
              <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </div>
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

        // Function to fetch count from database
        function getCount($conn, $table, $condition) {
            $sql = "SELECT COUNT(*) AS count FROM $table WHERE $condition";
            $result = $conn->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                return $row["count"];
            } else {
                return 0;
            }
        }

        // Function to fetch average from database
        function getAverage($conn, $table, $column) {
            $sql = "SELECT AVG($column) AS average FROM $table";
            $result = $conn->query($sql);

            if ($result) {
                $row = $result->fetch_assoc();
                return $row["average"];
            } else {
                return 0;
            }
        }
        ?>
          <div class="row">
            <div class="col-md-12">
              <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border ">
                <div class="d-md-block d-none">
                </div>
              </div>
              <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Orders in Process</h5>
                          <h2 class="mb-4 text-dark font-weight-bold"><?php echo getCount($conn, 'orders', "Status='Active'"); ?></h2>
                          <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><canvas width="218" height="218" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Orders delivered</h5>
                          <h2 class="mb-4 text-dark font-weight-bold"><?php echo getCount($conn, 'orders', "Status='Completed'"); ?></h2>
                          <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><canvas width="218" height="218" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Total Customers</h5>
                          <h2 class="mb-4 text-dark font-weight-bold"><?php echo getCount($conn, 'customer', '1'); ?></h2>

                          <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><canvas width="218" height="218" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Average Order Value</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">₹<?php echo number_format(getAverage($conn, 'orders', 'Total_Amt'), 2); ?></h2>
                          <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><canvas width="218" height="218" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        ?>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Orders</h4>
              <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
              </p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> O_ID </th>
                    <th> Date </th>
                    <th> Total_Amt </th>
                    <th> User_Id </th>
                    <th> Packaging_Id </th>
                    <th> Location_Id </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    // Database connection details
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

                    // Fetch data from the "orders" table
                    $sql = "SELECT O_ID, Date, Total_Amt, User_Id, Packaging_Id, Location_Id FROM orders";
                    $result = $conn->query($sql);

                    // Check if there are orders in the database
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["O_ID"] . "</td>";
                            echo "<td>" . $row["Date"] . "</td>";
                            echo "<td>" . $row["Total_Amt"] . "</td>";
                            echo "<td>" . $row["User_Id"] . "</td>";
                            echo "<td>" . $row["Packaging_Id"] . "</td>";
                            echo "<td>" . $row["Location_Id"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No orders found</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="footer-inner-wraper">
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->

</body>
</html>