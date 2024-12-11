<?php
// Database connection
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO quote (name, email, phone, company, address, service_requested) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $company, $address, $serviceRequested);

    // Set parameters and execute
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $address = $_POST["address"];
    $serviceRequested = $_POST["serviceRequested"];
    $stmt->execute();

    // Close statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect to a success page or display a success message
    header("Location: success.php");
    exit();
} else {
    // If the form was not submitted, redirect to the form page
    header("Location: index.php");
    exit();
}
?>
