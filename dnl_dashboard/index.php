<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DNL-Admin</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .card {
      width: 100%;
      max-width: 400px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border: 1px solid green;
    }

    .card-header {
      background-color: #f5fff4;
      color: white;
      text-align: center;
      padding: 20px;
      border-bottom: 1px solid green;
    }

    .card-body {
      padding: 20px;
    }

    .form-label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-control {
      width: 93%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .btn {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      background-color: green;
      color: white;
      cursor: pointer;
    }

    .btn:hover {
      background-color: darkgreen;
    }

    .text-center {
      text-align: center;
    }

    .text-primary {
      color: green;
    }

    .text-primary.text-gradient {
      background-image: linear-gradient(45deg, green, darkgreen);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .text-sm {
      font-size: 14px;
    }

    .mt-4 {
      margin-top: 16px;
    }
  </style>
</head>

<body>
  <div class="card">
    <div class="card-header">
      <img src="./assets/DNL-01.png" alt="Logo" style="max-width: 100px;">
    </div>
    <div class="card-body">
      <form role="form" class="text-start" action="./process_login.php">
        <div class="form-group">
          <label class="form-label">Username</label>
          <input class="form-control" type="text" id="username" name="username" placeholder="username" required>
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input class="form-control" type="password" id="password" name="password" placeholder="password" required>
        </div>
        <div class="text-center">
          <button type="submit" value="Login" class="btn">Sign in</button>
        </div>
        <!-- <p class="mt-4 text-sm text-center"><a href="sign-up.html" class="text-primary text-gradient font-weight-bold"></a></p> -->
      </form>
    </div>
  </div>
</body>

</html>