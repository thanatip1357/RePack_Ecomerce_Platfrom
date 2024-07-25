<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style_Login.css">
    <title>signin-signup</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form action="login.php" method="post"class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="mail" name ="mail" type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="pass" name="pass" type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn">
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="logininsert.php"  method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="name" name="name" type="text" placeholder="Name">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" name ="email"type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" name="password" type="password" placeholder="Password">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="dob" name="dob" type="date" placeholder="Date-Of-Birth">
                </div>
                
                <input type="submit" value="Sign up" class="btn">
                <p class="social-text"></p>
                
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of RePack?</h3>
                    <p>Welcome Back Captain. Have a Great Experience Ordering! </p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to RePack?</h3>
                    <p>Don't Worry , There's no better time than now!</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
<?php
    if (isset($_POST['mail']) && isset($_POST['pass'])) {
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
      $sql = "SELECT * FROM customer WHERE email = ? ";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $_POST['mail']);
      $stmt->execute();
      $result = $stmt->get_result();

      // Check if user exists
      if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (($_POST['pass']==$user['Password'])) {
          
          // Start session and store user data (replace with secure session management)
        //   session_start();
          $_SESSION['user_id'] = $user['id'];
        //   $_SESSION['email'] = $user['email'];
        $cookie_name = "name";
        $cookie_value = $user['Name'];
        setcookie($cookie_name, $cookie_value);
        $cookie_name2 = "id";
        $cookie_value2 = $user['CustID'];
        setcookie($cookie_name2, $cookie_value2);
    header("location:index.php?id=$user[CustID]");
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