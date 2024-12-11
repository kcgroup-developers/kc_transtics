<?php
// Database connection
include '../PHP/config/db_conn.php';

// Initialize variables
$project_id = "";
$company_name = "";
$type_of_product = "";
$description = "";
$category = "";

// Check if the project ID is provided in the URL
if (isset($_GET['id'])) {
    $project_id = $_GET['id'];

    // Query to retrieve the specific project from the database
    $sql = "SELECT project_id, company_name, type_of_product, description, category, image FROM project WHERE project_id = $project_id";
    $result = $conn->query($sql);

    // Check if there are rows in the result
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();  // Fetch the row
        $company_name = $row['company_name'];
        $type_of_product = $row['type_of_product'];
        $description = $row['description'];
        $category = $row['category'];
    } else {
        die("No project found with the given ID");
    }
} else {
    die("No project ID provided");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Project</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .form-group {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 10px;
        }

        textarea {
            resize: vertical;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #fff;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;

        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.8em;
        }

        /* CSS for image */
        .img-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .img-container img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            /* Add margin-top as per your requirement */
        }

        button[type="button"] {
            padding: 10px 20px;
            background-color: #f44336;
            /* Red color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="button"]:hover {
            background-color: #d32f2f;
            /* Darker red color on hover */
        }
    </style>
</head>

<body>
    <div class="form-group">
        <h2>Update Project</h2>
        <form action="process_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $project_id; ?>">
            <label for="company_name">Company Name:</label><br>
            <input type="text" id="company_name" name="company_name" value="<?php echo $company_name; ?>" required><br><br>

            <label for="type_of_product">Type of Product:</label><br>
            <input type="text" id="type_of_product" name="type_of_product" value="<?php echo $type_of_product; ?>" required><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" required><?php echo $description; ?></textarea><br><br>

            <label for="category">Category:</label><br>
            <select id="category" name="category" required>
                <option value="">(select category)</option>
                <option value="Import" <?php if ($category == 'Import') echo 'selected'; ?>>Import</option>
                <option value="Export" <?php if ($category == 'Export') echo 'selected'; ?>>Export</option>
            </select><br><br>

            <label for="existing_image">Existing Image:</label><br>
            <div class="img-container">
                <?php
                $imagePath = $row['image'];

                if (!empty($imagePath)) {
                    echo '<img src="' . $imagePath . '" alt="Existing Image" style="max-width: 200px; max-height: 200px;"><br>';
                } else {
                    echo '<p>No image available for this project.</p>';
                }
                ?>
            </div>

            <!-- File Upload for Images -->
            <label for="file">New Image Upload:</label>
            <input type="file" id="file" name="file" accept="image/*"><br>

            <input type="submit" value="Update">
            <button type="button" onclick="goBack()">Cancel</button>
        </form>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </div>
</body>

</html>