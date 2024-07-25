<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../assets/images/repacklogo.png" alt="logo"></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo-mini.svg" alt="logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
          <form class="d-flex align-items-center h-100" action="#">
            
          </form>
        </div>
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
                <p class="mb-1 text-black"><?=$_COOKIE['name']?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
             
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../../pages/ui-features/profile.php">
                  <span>Profile</span>
                  <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ml-1"></i>
                  </span>
                </a>
                
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../../pages/samples/login.php">
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item ">
            <a class="nav-link" href="../../index.php">
              <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.php">Log In</a></li>
           
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
              <span class="menu-title">Sales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/sale/total_sales.php">Total Sales</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/sale/order_status.php">Order Status</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/sale/customer_list.php">Customer List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="true" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
              <span class="menu-title">Purchases</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse show" id="ui-basic" style="">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="product_list.php"> Product List (stock info)</a></li>
                <li class="nav-item"> <a class="nav-link" href="product_line.php">Product&nbsp;Line</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
          
          </li>
          
          
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="../../pages/samples/login.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
          </li>
        </ul>
      </nav>      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Line </h3>
              
            </div>
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Product Line</h4>
                    
                    <form class="forms-sample" method="post" action="product_form.php">
                      
                      <div class="form-group">
                        <label for="exampleInputEmail3">Product Name</label>
                        <input type="text" class="form-control" id="PName" name="PName" placeholder="Product Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="Description" name="Description" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" class="form-control" id="Price" name="Price" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Stock Quantity</label>
                        <input type="number" class="form-control" id="Stock_quantity" name="Stock_Quantity" placeholder="Stock Quantity">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Category ID</label>
                        <input type="number" class="form-control" id="Category_ID" name="Category_ID" placeholder="Category ID">
                      </div>
                      <div class="form-group">
                        <label for="">Image</label>
                        <input type="text" class="form-control" id="Image" name="Image" placeholder="Image">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Rating</label>
                        <input type="number" class="form-control" id="exampleInputName1" id="Rating" name="Rating" placeholder="Rating">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Type</label>
                        <input type="text" class="form-control" id="Type" name="Type" placeholder="Type">
                      </div>
                      <div class="form-group">
                        <label for="">CostP</label>
                        <input type="number" class="form-control" id="Cost" name="Cost" placeholder="Cost">
                      </div>
                      
                      
                      
                      
                      <button type="submit" class="btn btn-primary mr-2" onclick="showPopup()">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
              function showPopup() {
                  alert("Product Added");
              }
          </script>
          
@endsection
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>