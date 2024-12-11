<?php
// Assuming you have a database connection $conn
include '../PHP/config/db_conn.php';



 // Assuming you have a database connection $conn
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $feature_id = $_POST['feature_id'];

    $sql = "INSERT INTO function (name, title, description, content, feature_id) VALUES ('$name', '$title', '$description', '$content', $feature_id)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
 
