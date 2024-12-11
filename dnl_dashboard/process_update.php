<?php
include './PHP/config/db_conn.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $post_id = $_POST["post_id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = $_POST["date"];
    $posted_by = $_POST["posted_by"];
    $tag = $_POST["tag"];

    // Check if an image is uploaded
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] != UPLOAD_ERR_NO_FILE) {
        $file = $_FILES["file"];

        // Check for file errors
        if ($file["error"] == UPLOAD_ERR_OK) {
            // Define target directory
            $targetDirectory = "./uploads/";

            // Generate a unique filename to prevent overwriting
            $targetFile = $targetDirectory . uniqid() . "_" . basename($file["name"]);

            // Move the uploaded file to the target location
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                // Update the post in the database using prepared statements
                $sql = "UPDATE posts SET title = ?, content = ?, date = ?, posted_by = ?, tag = ?, image = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);

                // Check if the statement is prepared successfully
                if ($stmt) {
                    // Bind parameters to the placeholders
                    $stmt->bind_param("ssssssi", $title, $content, $date, $posted_by, $tag, $targetFile, $post_id);

                    // Execute the statement
                    if ($stmt->execute()) {
                        // Redirect to a confirmation page or back to the updated post page
                        header("Location: ./PHP/posts.php");
                        exit();
                    } else {
                        echo "Error updating post: " . $stmt->error;
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            } else {
                echo "Error moving uploaded file.";
            }
        } else {
            echo "File upload error: " . $file["error"];
        }
    } else {
        // Update the post without changing the image
        $sql = "UPDATE posts SET title = ?, content = ?, date = ?, posted_by = ?, tag = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        // Check if the statement is prepared successfully
        if ($stmt) {
            // Bind parameters to the placeholders
            $stmt->bind_param("sssssi", $title, $content, $date, $posted_by, $tag, $post_id);

            // Execute the statement
            if ($stmt->execute()) {
                // Redirect to a confirmation page or back to the updated post page
                header("Location: ../");
                exit();
            } else {
                echo "Error updating post: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
} else {
    // Redirect to the form if accessed directly without submission
    header("Location: updateBlogPost.php");
    exit();
}

// Close the database connection
$conn->close();
?>