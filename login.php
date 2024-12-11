<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Sign-In and Bootstrap Interface</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="521218248219-f6vum4ke98rgj62ffbvc9u1g4gakg24a.apps.googleusercontent.com">

    <style>
        body {
            background-color: #343a40; /* Dark mode background color */
            color: #fff; /* Dark mode text color */
        }

        .container {
            margin-top: 100px; /* Vertical centering */
        }

        .form-control, .btn {
            background-color: #495057; /* Dark mode form input and button background color */
            color: #fff; /* Dark mode form input and button text color */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">CGHub</h1>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                <div class="g-signin2 mt-4" data-onsuccess="onSignIn"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var id_token = googleUser.getAuthResponse().id_token;

            // Send id_token to your server via AJAX
            // Example:
            // $.post("save_data.php", { idtoken: id_token });
        }

        $(document).ready(function() {
            $("#loginForm").submit(function(event) {
                event.preventDefault(); // Prevent form submission

                // Perform your own form validation or additional actions here

                // If validation succeeds, submit the form
                // Example: $("#loginForm").unbind('submit').submit();
            });
        });
    </script>
</body>
</html>
