<?php
// Example PHP script for authentication
// You should replace this with your actual database check logic

// Mock check for username and password
if ($_POST['username'] == 'admin' && $_POST['password'] == 'password') {
    // Redirect to coffee shop page
    header('Location: coffee-shop.html');
} else {
    // Redirect back to login with an error message
    header('Location: login.html?error=invalid_credentials');
}
?>
