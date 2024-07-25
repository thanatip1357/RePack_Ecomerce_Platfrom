<?php
// Establish database connection
$con2 = mysqli_connect("localhost", 'root', '', 'repack');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the sign-up form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = mysqli_real_escape_string($con2, $_POST['name']);
    $email = mysqli_real_escape_string($con2, $_POST['email']);
    $password = mysqli_real_escape_string($con2, $_POST['password']);
    $dob = mysqli_real_escape_string($con2, $_POST['dob']);

    // Validate input data
    if (empty($name) || empty($email) || empty($password) || empty($dob)) {
        echo "All fields are required";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit();
    }

    

    // Prepare and execute SQL query to insert user data
    $sql = "INSERT INTO `customer`(`Name`, `Email`, `Password`, `DOB`) 
            VALUES ('$name', '$email', '$password', '$dob')";

    if (mysqli_query($con2, $sql)) {
        // Redirect to login page after successful sign-up
        header("location: login.php");
        exit();
    } else {
        echo "Something went wrong: " . mysqli_error($con2);
    }
}

// Close the database connection
mysqli_close($con2);
?>
