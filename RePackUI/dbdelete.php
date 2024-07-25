<?php
             $servername = "localhost";
             $username = "root";
             $password = '';
             $dbname = "repack";

          $conn = new mysqli($servername, $username, $password, $dbname,3308);

                        $con2 = mysqli_connect("localhost", 'root', '', 'repack','3308');
                        

                        if(mysqli_query($conn,"DELETE FROM `cart` WHERE User_ID=$_COOKIE[id]"))
                        {
                            header("location:shop.php");
                        } else {
                        echo "Something Went Wrong<br>";
                        }
                        ?>