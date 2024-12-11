<?php
// Database connection
include '../PHP/config/db_conn.php';


// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = isset($_POST["quill-content"]) ? $_POST["quill-content"] : '';

    // Check if image was uploaded
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert data into database using prepared statement
            $sql = "INSERT INTO service (title, content, image) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $title, $content, $target_file);

            if ($stmt->execute()) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "No image uploaded or an error occurred.";
    }
}

$conn->close();
?>
