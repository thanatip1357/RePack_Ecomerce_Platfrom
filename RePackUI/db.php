          <?php
             $servername = "localhost";
             $username = "root";
             $password = '';
             $dbname = "repack";

          $conn = new mysqli($servername, $username, $password, $dbname,3308);
          $rs1= mysqli_query($conn, "select * from products where P_ID=$_GET[id]");
          $array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
          $name=$array[0]["P_Name"];
          $price=$array[0]["Price"];
          $tp=$array[0]["Price"]*1;
                        $con2 = mysqli_connect("localhost", 'root', '', 'repack','3308');
                        
                        echo "INSERT INTO `cart`(`User_ID`, `Name`, `Unit_Price`, `Quantity`, `TotalP`)
                         VALUES ('$_COOKIE[id]','$name','$price','1','$tp')";


                        if(mysqli_query($con2,"INSERT INTO `cart`(`User_ID`, `Name`, `Unit_Price`, `Quantity`, `TotalP`)
                        VALUES ('$_COOKIE[id]','$name','$price','1','$tp')"))
                        {
                            header("location:shop.php");
                        } else {
                        echo "Something Went Wrong<br>";
                        }
                        ?>