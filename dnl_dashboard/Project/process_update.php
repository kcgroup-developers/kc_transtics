<?php
// Database connection
include '../PHP/config/db_conn.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $id = isset($_POST['id']) ? intval($_POST['id']) : null;
    $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : null;
    $type_of_product = isset($_POST['type_of_product']) ? $_POST['type_of_product'] : null;
    $description = isset($_POST['description']) ? $_POST['description'] : null;
    $category = isset($_POST['category']) ? $_POST['category'] : null;

    // Check if ID is provided and is a valid integer
    if (!$id || $id <= 0) {
        echo "Invalid project ID.";
        exit;
    }

    // Image upload
    $target_dir = "uploads/"; // Directory where images will be stored
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare update statement
    $sql = "UPDATE project SET company_name=?, type_of_product=?, description=?, category=?, image=? WHERE project_id=?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }

    // Bind parameters
    $stmt->bind_param("sssssi", $company_name, $type_of_product, $description, $category, $target_file, $id);

    // Execute statement
    if ($stmt->execute()) {
        echo "Project details updated successfully";
    } else {
        echo "Error updating project details: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
    
    // Redirect the user after processing the form
    header("Location: upload_project.php");
    exit;
} else {
    echo "Invalid request.";
    exit;
}
?>
