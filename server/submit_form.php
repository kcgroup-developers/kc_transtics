<?php
include "./connections/connect.php"; // Include the file containing database connection details

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Folder to store uploaded images
    $upload_folder = "uploads/";

    // Check if the uploads folder exists, if not, create it
    if (!file_exists($upload_folder)) {
        mkdir($upload_folder, 0777, true);
    }

    // Check if both text input and image upload fields are set in the $_POST and $_FILES arrays
    if (isset($_POST['text_input']) && isset($_FILES['image_upload'])) {
        // Get the text input from the form
        $text_input = $_POST['text_input'];

        // Get the file name and temporary location of the uploaded image
        $image_name = $_FILES['image_upload']['name'];
        $image_temp = $_FILES['image_upload']['tmp_name'];

        // Check if the file upload was successful
        if (move_uploaded_file($image_temp, $upload_folder . $image_name)) {
            // Construct the image path
            $image_path = $upload_folder . $image_name;

            // Prepare and bind the SQL statement
            $sql = "INSERT INTO form_data (text_input, image_path) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $text_input, $image_path);

            // Execute the SQL statement
            if ($stmt->execute()) {
                echo "Form submitted successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close statement and database connection
            $stmt->close();
        } else {
            // Error moving the uploaded image
            echo "Error uploading image.";
        }
    } else {
        // Handle case where text input or image upload field is missing
        echo "Text input or image upload field is missing.";
    }

    // Close database connection
    $conn->close();
}
?>
