<?php
include './PHP/config/db_conn.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Update the status of the quotation to "Rejected"
    $sql = "UPDATE quotation SET status='Rejected Quote' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    header("Location: table.php");
    exit;
} else {
    echo "No ID provided";
}
?>

