<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Text Input and Image Upload</title>
</head>
<body>

<h2>Submit Form</h2>

<form action="submit_form.php" method="post" enctype="multipart/form-data">
    <input type="text" name="text_input" placeholder="Enter text">
    <input type="file" name="image_upload">
    <button type="submit">Submit</button>
</form>


</body>
</html>
