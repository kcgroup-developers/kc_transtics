<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (!empty($_POST['name']) && !empty($_POST['description'])) {
        // Sanitize the input data to prevent SQL injection
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);

        // Perform database operation to insert the data
        include '../PHP/config/db_conn.php';


        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO feature (name, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $description);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill all required fields.";
    }
}
