<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the description and category from the form
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    
    // Database connection details
    include '../PHP/config/db_conn.php';

    
    // Insert the description and category into the database
    $sql = "INSERT INTO description (title, description, category) VALUES ('$title', '$description', '$category')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>
