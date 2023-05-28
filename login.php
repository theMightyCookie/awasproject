<?php
    // Get username and password from POST data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Database connection code would go here

    // Insecure SQL statement - vulnerable to SQL Injection
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    // Execute SQL statement and check results
    // Redirect to dashboard if successful, back to login if not
    // ...
?>
