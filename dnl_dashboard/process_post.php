<?php

include './PHP/config/db_conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = isset($_POST["title"]) ? $_POST["title"] : '';
    $content = isset($_POST["content"]) ? $_POST["content"] : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $postedBy = isset($_POST["posted_by"]) ? $_POST["posted_by"] : '';
    $tag = isset($_POST["tag"]) ? $_POST["tag"] : '';

    // Handle file upload if file is set
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        // Handle file upload
        $targetDirectory = "./uploads/";
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

        // Move the uploaded file to the target location
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            // Insert data into the database using prepared statements
            $sql = "INSERT INTO posts (title, content, date, posted_by, tag, image) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Check if the statement is prepared successfully
            if ($stmt) {
                // Bind parameters to the placeholders
                $stmt->bind_param("ssssss", $title, $content, $date, $postedBy, $tag, $targetFile);

                // Execute the statement
                if ($stmt->execute()) {
                    // Redirect to createPost.php after successful submission
                    header("Location: ./PHP/createPost.php?success=1");
                    exit();
                } else {
                    echo "<h2>Error submitting post. Please try again.</h2>";
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "<h2>Error preparing statement. Please try again.</h2>";
            }
        } else {
            echo "<h2>Error uploading file. Please try again.</h2>";
        }
    } else {
        echo "<h2>No file uploaded or file upload error. Please try again.</h2>";
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: test.html");
    exit();
}
?>
