<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Request a Quote</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f8f0; /* light green */
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin-top: 50px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
}

.btn-primary {
    background-color: #4CAF50; /* green */
    border: none;
}

.btn-primary:hover {
    background-color: #45a049; /* darker green on hover */
}

</style>
</head>
<body>

<div class="container">
    <h2 class="mt-5 mb-4">Request a Quote</h2>
    <form id="quoteForm" action="process_quote.php" method="post" onsubmit="return checkLogin()">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" name="company" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="serviceRequested">Service Requested:</label>
            <textarea class="form-control" id="serviceRequested" name="service_requested" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    function checkLogin() {
        if (!isLoggedIn()) {
            alert("You must log in to request a quote.");
            // Redirect to the login page
            window.location.href = "login.html";
            return false; // Prevent form submission
        }
        return true; // Allow form submission
    }

    function isLoggedIn() {
        // Implement your logic to check if the user is logged in
        // For example, you can use session variables set after successful login
        return <?php echo isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ? "true" : "false"; ?>;
    }
</script>




<!-- Bootstrap JS and dependencies (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>
</html>
