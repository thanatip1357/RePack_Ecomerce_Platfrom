<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input data
    $productName = $_POST['PName'];
    $description = $_POST['Description'];
    $price = $_POST['Price'];
    $stockQuantity = $_POST['Stock_Quantity'];
    $categoryId = $_POST['Category_ID'];
    $image = $_POST['Image'];
    $rating = $_POST['Rating'];
    $type = $_POST['Type'];
    $cost = $_POST['Cost'];

    // Database connection details
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

    // Insert data into the "products" table
    $sql = "INSERT INTO products (P_Name, Description, Price, Stock_Quantity, Category_ID, Image, Rating, Type, CostP)
            VALUES ('$productName', '$description', '$price', '$stockQuantity', '$categoryId', '$image', '$rating', '$type', '$cost')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully";
        header("location:product_list.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
