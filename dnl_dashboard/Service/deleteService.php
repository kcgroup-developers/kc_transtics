<?php
// Step 1: Receive the request
if(isset($_POST['id'])){
    $projectId = $_POST['id'];

    // Step 3: Connect to the database
    include '../PHP/config/db_conn.php';


    // Step 4: Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM service WHERE id = ?");
    $stmt->bind_param("i", $projectId);

    if ($stmt->execute() === TRUE) {
        // Step 5: Handle success
        echo "Service deleted successfully";
    } else {
        // Step 5: Handle failure
        echo "Error deleting Service: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
} else {
    echo "No service ID provided";
}
?>
