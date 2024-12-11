<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Clear "Remember Me" cookies
setcookie('remember_me_username', '', time() - 3600);
setcookie('remember_me_password', '', time() - 3600);

// Redirect to the login page or any other page as needed
header("Location: index.php");
exit;
