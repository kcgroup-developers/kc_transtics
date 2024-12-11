<?php
session_start();
include 'config.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch user details from the database
    $stmt = $conn->prepare("SELECT * FROM register WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            
            // Redirect to the quote request page or any other page
            header("Location: ../Quotation/quote.php");


            exit;
        } else {
            // Password is incorrect
            echo "Invalid password.";
        }
    } else {
        // Username not found
        echo "User not found.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
