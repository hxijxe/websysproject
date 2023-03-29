<?php
// Initialize variables
$email = $new_password = $re_password = $errorMsg = "";
$success = true;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (empty($_POST["email"])) {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }

    // Validate new password
    if (empty($_POST["new_pass"])) {
        $errorMsg .= "New password is required.<br>";
        $success = false;
    } else {
        $new_password = test_input($_POST["new_pass"]);
    }

    // Validate re-entered password
    if (empty($_POST["re_pass"])) {
        $errorMsg .= "Please re-enter your new password.<br>";
        $success = false;
    } else {
        $re_password = test_input($_POST["re_pass"]);
        if ($new_password != $re_password) {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        }
    }

    // If validation passed, update password
    if ($success) {
        // Connect to database
        $config = parse_ini_file('../../private/db-config.ini');
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Hash new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update password in database
        $sql = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
        if (mysqli_query($conn, $sql)) {
            $successMsg = "Password updated successfully.";
        } else {
            $errorMsg = "Error updating password: " . mysqli_error($conn);
            $success = false;
        }

        // Close database connection
        mysqli_close($conn);
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
