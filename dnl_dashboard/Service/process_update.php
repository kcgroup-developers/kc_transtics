<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Connect to the database
     include '../PHP/config/db_conn.php';


    // Prepare and bind the update statement
    $stmt = $conn->prepare("UPDATE service SET title=?, content=?, image=? WHERE id=?");
    $stmt->bind_param("sssi", $title, $content, $image, $id);

    // Set parameters
    $title = $_POST["title"];
    $content = $_POST["content"];
    $id = $_POST["id"];
    $image = $_POST["existing_image"];

    // Check if a new image file was uploaded
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Define the target directory for storing the uploaded image
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Check if the file is an actual image
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            // If the file is an image, move it to the target directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $image = $target_file;
            } else {
                // Error uploading file
                echo "Error uploading file";
            }
        } else {
            // File is not an image
            echo "File is not an image";
        }
    }

    // Execute the update statement
    $stmt->execute();

    // Close statement and connection
    $stmt->close();
    $conn->close();

    // Redirect to the main page after updating
    header("Location: upload_service.php");
    exit();
}
?>
