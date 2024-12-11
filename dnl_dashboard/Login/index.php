<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS link -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Add Bootstrap JavaScript and jQuery (required for some Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


    <link rel="stylesheet" href="styles.css"> <!-- Create a CSS file for custom styles -->
    <title>Login Form</title>
</head>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $submitted_username = $_POST["username"];
    $submitted_password = $_POST["password"];

    // Database connection parameters
    $db_host = "localhost";
    $db_user = "plexustrust_vcardapp";
    $db_password = "Vcardapp$@168";
    $db_name = "plexustrust_vcardapp";

    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query to retrieve the user's information
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $submitted_username);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a user with the submitted username exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        // Check if the submitted password matches the stored password
        if ($submitted_password === $stored_password) {
            $_SESSION["username"] = $submitted_username;

            if (isset($_POST['remember_me'])) {
                // Set a cookie to remember the user's login information
                setcookie('remember_me_username', $submitted_username, time() + 3600 * 24 * 365);
                setcookie('remember_me_password', $submitted_password, time() + 3600 * 24 * 365);
            }

            header("Location: ../index.php");
            exit;
        }
    }
    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
<body>
<video id="background-video" playsinline autoplay muted loop>
<source src="../assets/images/Animated.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="../assets/images/Logo plexus_Trust._20230203.png" alt="Digital Logo" class="digital-logo img-fluid">
                </div>
                <div class="card mt-4 card-border-animation">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                            </div>
                            <div class="form-group">
    <label for="password">Password</label>
    <div class="input-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        <div class="input-group-append">
            <span class="input-group-text">
                <i class="fas fa-eye" id="password-toggle"></i>
            </span>
        </div>
    </div>
</div>

                            <div class="form-group">
    <label for="remember_me">Remember Me</label>
    <input type="checkbox" id="remember_me" name="remember_me">
</div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for Login Failed -->
    <div class="modal fade" id="loginFailedModal" tabindex="-1" role="dialog" aria-labelledby="loginFailedModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginFailedModalLabel">Login Failed</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Login failed. Please check your username and password.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');

    passwordToggle.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        }
    });
</script>

    <!-- JavaScript to show the modal when login fails -->
    <script>
      <?php
      if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Check if login failed
        if ($result->num_rows != 1 || $submitted_password !== $stored_password) {
          echo '$(document).ready(function() {
            $("#loginFailedModal").modal("show");
          });';
        }
      }
      ?>
    </script>
</body>
</html>
