<?php
include '../PHP/config/db_conn.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve data based on ID
    $sql = "SELECT id, name, title, description, content FROM function WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $name = $row["name"];
        $title = $row["title"];
        $description = $row["description"];
        $content = htmlspecialchars_decode($row["content"]); // Decode HTML entities
    } else {
        echo "No data found";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Form</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>Update Form</h2>
    <form method="POST" action="./Process/process_update.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>"><br>

        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description" value="<?php echo $description; ?>"><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5"><?php echo $content; ?></textarea><br><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>
