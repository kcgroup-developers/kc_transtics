<?php
// Database connection
include '../PHP/config/db_conn.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST["company_name"];
    $type_of_product = $_POST["type_of_product"];
    $description = $_POST["description"];
    $category = $_POST["category"];

    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        // Insert data into database
        $sql = "INSERT INTO project (company_name, type_of_product, description, category, image)
                VALUES ('$company_name', '$type_of_product', '$description', '$category', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
