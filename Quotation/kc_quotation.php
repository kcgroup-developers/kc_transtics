<?php
// Include database connection
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $type_of_goods = mysqli_real_escape_string($conn, $_POST['type_of_goods']);
    $quantity = intval($_POST['quantity']);  // Ensure quantity is an integer
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $shipping_date = mysqli_real_escape_string($conn, $_POST['shipping_date']);

    // SQL query to insert data into the quotation table
    $sql = "INSERT INTO quotation (name, company, email, phone, type_of_goods, quantity, city, country, shipping_date)
            VALUES ('$name', '$company', '$email', '$phone', '$type_of_goods', $quantity, '$city', '$country', '$shipping_date')";

   // Execute query
   if (mysqli_query($conn, $sql)) {
    // If successful, redirect back to the first page
    header("Location: index.php");  // Change "index.php" to the actual first page URL
    exit(); // Stop further script execution after redirect
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
}
?>
