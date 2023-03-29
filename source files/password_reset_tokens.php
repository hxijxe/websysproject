<?php
global $email;
// Generate unique token
$token = uniqid();

// Insert token in password_reset_tokens table
$query = "INSERT INTO password_reset_tokens (email, token, timestamp) VALUES ('$email', '$token', NOW())";
// Create database connection.
$config = parse_ini_file('../../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
mysqli_query($conn, $query);


// Check if token is valid
$query = "SELECT * FROM password_reset_tokens WHERE token='$token' AND timestamp >= DATE_SUB(NOW(), INTERVAL 1 HOUR)";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
    // Token is invalid or expired
    $errors[] = "Invalid or expired token";
} else {
    // Token is valid, display password reset form
    echo '<form method="post" action="reset_password.php">';
    echo 'New Password: <input type="password" name="new_password"><br>';
    echo 'Confirm New Password: <input type="password" name="confirm_password"><br>';
    echo '<input type="hidden" name="token" value="' . $token . '">';
    echo '<input type="submit" value="
    Reset Password" name="reset_password">';
    echo '</form>';
}