<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p>Sorry, an error occurred while processing your request:</p>
    <p><?php echo isset($_GET['error']) ? htmlspecialchars($_GET['error']) : 'Unknown error'; ?></p>
</body>
</html>
