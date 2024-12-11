<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    require_once "config.php";

    // Check if password and retype password match
    if ($_POST["password"] !== $_POST["retype_password"]) {
        echo "Passwords do not match.";
        exit;
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO register (username, email, phone_number, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $phone_number, $password);

    // Set parameters and execute
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    if ($stmt->execute()) {
        // Registration successful
        echo "Account created successfully.";
    } else {
        // Registration failed
        echo "Error creating account: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
