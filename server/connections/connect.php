<?php
  $servername = "localhost";
  $username = "dnlcambodia_root";
  $password = "mOaV7Lo-PAc.";
  $dbname = "dnlcambodia_test";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


?>