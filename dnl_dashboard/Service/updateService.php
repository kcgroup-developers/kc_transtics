<?php
// Check if the ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Connect to the database
    include '../PHP/config/db_conn.php';

    // Prepare and bind the select statement
    $stmt = $conn->prepare("SELECT * FROM service WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a service was found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title']; // Define the $title variable
        $content = $row['content']; // Define the $content variable
        $imagePath = $row['image']; // Define the $imagePath variable


        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Service not found";
        exit();
    }
} else {
    echo "No ID provided";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Service</title>
    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .upload-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #editor {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .img-container {
            margin-top: 5px;
        }

        .img-container img {
            max-width: 200px;
            max-height: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="upload-form">
        <h3 class="title">Update Service</h3>
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="<?php echo $title; ?>" required><br><br>

            <label for="content">Content:</label><br>
            <div id="editor" style="height: 300px;"><?php echo $content; ?></div>
            <input type="hidden" id="content" name="content" value="<?php echo $content; ?>"><br><br>

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

            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Update">
        </form>
    </div>
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{
                        'header': '1'
                    }, {
                        'header': '2'
                    }, {
                        'font': []
                    }],
                    [{
                        'size': []
                    }],
                    ['bold', 'italic', 'underline', 'strike', 'blockquote'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            }
        });

        // Get the content of the Quill editor and set it to the hidden input field
        var form = document.querySelector('form');
        form.onsubmit = function() {
            var content = document.querySelector('#editor .ql-editor').innerHTML;
            document.querySelector('#content').value = content;
        };
    </script>
</body>

</html>