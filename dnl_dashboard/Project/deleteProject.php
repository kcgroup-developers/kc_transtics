<?php
// Step 1: Receive the request
if(isset($_POST['id'])){
    $projectId = $_POST['id'];

    
    include '../PHP/config/db_conn.php';

    // Step 4: Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM project WHERE project_id = ?");
    $stmt->bind_param("i", $projectId);

    if ($stmt->execute() === TRUE) {
        // Step 5: Handle success
        echo "Record deleted successfully";
    } else {
        // Step 5: Handle failure
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No project ID provided";
}
?>
