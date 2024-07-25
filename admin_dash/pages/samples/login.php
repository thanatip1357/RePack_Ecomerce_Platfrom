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
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                
                <h4>Hello! Let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                <form class="pt-3" action="login.php" method="post">
                    <div class="form-group">
                        <input id='email' name='email' type="email" class="form-control form-control-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input id='pass' name='pass' type="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
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

<?php
    if (isset($_POST['email']) && isset($_POST['pass'])) {
      // Replace these with your actual database connection details
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

      // Prepare and execute query
      $sql = "SELECT * FROM users_admin WHERE Email_ID = ? ";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $_POST['email']);
      $stmt->execute();
      $result = $stmt->get_result();

      // Check if user exists
      if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (($_POST['pass']==$user['Password'])) {
          
          // Start session and store user data (replace with secure session management)
        //   session_start();
          // $_SESSION['User_ID'] = $user['id'];
        //   $_SESSION['email'] = $user['email'];
        // $cookie_name = "name";
        // $cookie_value = $user['Name'];
        // setcookie($cookie_name, $cookie_value);
        // $cookie_name2 = "id";
        // $cookie_value2 = $user['User_ID'];
        // setcookie($cookie_name2, $cookie_value2);
    header("location:../../index.php?id=$user[User_ID]");
    ?><?php
        } else {
          echo "<p>Invalid password.</p>";
        }
      } else {
        echo "<p>Invalid email.</p>";
      }

      // Close connection
      $conn->close();
    }
  ?>