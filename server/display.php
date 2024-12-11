<?php
// Database connection details
include "./connections/connect.php";

// Initialize $formData array
$formData = array();

// Prepare and execute SQL statement to fetch all data
$sql = "SELECT * FROM form_data";
$result = $conn->query($sql);

// Check if data is found
if ($result->num_rows > 0) {
    // Fetch all rows of data into $formData array
    while ($row = $result->fetch_assoc()) {
        $formData[] = $row;
    }
} else {
    echo "No data found.";
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form Data</title>
</head>
<body>

<h2>Form Data</h2>

<?php foreach ($formData as $data): ?>
    <div>
        <p>Text Input: <?php echo $data['text_input']; ?></p>
        <?php if (!empty($data['image_path'])): ?>
            <img src="<?php echo $data['image_path']; ?>" alt="Uploaded Image" style="max-width: 300px;">
        <?php else: ?>
            <p>No image uploaded.</p>
        <?php endif; ?>
        <hr>
    </div>
<?php endforeach; ?>

</body>
</html>
