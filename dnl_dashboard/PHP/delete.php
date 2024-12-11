<?php
include './config/db_conn.php';
// Check if a delete request has been made
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Escape user input to prevent SQL injection
    $id = $conn->real_escape_string($_GET['id']);

    // SQL to delete a record
    $sql = "DELETE FROM posts WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
