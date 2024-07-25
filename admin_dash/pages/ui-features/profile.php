<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RePack</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  
  <body>
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../assets/images/repacklogo.png" alt="logo" width="300" height="100"></a>
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

// Fetch data from users_admin table
$sql = "SELECT * FROM users_admin where User_ID=$_COOKIE[id]";
$result = $conn->query($sql);

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    // Fetch the first row (you can modify this based on your specific requirements)
    $row = $result->fetch_assoc();

    // Close the result set
    $result->close();
}
?>
    <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Information</h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample">
    <div class="form-group">
        <label for="exampleInputUsername1">User ID</label>
        <input type="number" class="form-control" id="exampleInputUsername1" placeholder="User ID" value="<?php echo $row['User_ID']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" value="<?php echo $row['Name']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $row['Email_ID']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['Password']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputConfirmPassword1">Contact Number</label>
        <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="Contact Number" value="<?php echo $row['Contact_Number']; ?>">
    </div>
    <!-- Additional form fields can be added as needed -->

    <!-- Add a submit button if needed -->
    <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
</form>
</div>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>