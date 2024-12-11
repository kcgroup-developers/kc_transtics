<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Description Form</title>
    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            resize: vertical;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Quill editor styles */
        .ql-editor {
            min-height: 150px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #fff;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <h2>Upload Description</h2>
    <form action="upload_description.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="description">Description:</label><br>
        <!-- Use a div to create the Quill editor -->
        <div id="editor"></div><br><br>
        <!-- Add a hidden input field to store the Quill content -->
        <input type="hidden" id="description" name="description">
        <label for="category">Category:</label><br>
        <select id="category" name="category">
            <option value="Import">Import</option>
            <option value="Export">Export</option>
        </select><br><br>
        <input type="submit" value="Submit">


    </form>

    <!-- Include Quill script -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        // Get the Quill content and set it to the hidden input field
        var form = document.querySelector('form');
        form.onsubmit = function() {
            var description = document.querySelector('input[name=description]');
            description.value = quill.root.innerHTML;
        };
    </script>
</body>

</html>