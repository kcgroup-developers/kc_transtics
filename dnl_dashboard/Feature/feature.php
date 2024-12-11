<!DOCTYPE html>
<html>
<head>
    <title>Upload Name and Description</title>
</head>
<body>
    <h2>Upload Name and Description</h2>
    <form action="./Process/upload_feature.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
