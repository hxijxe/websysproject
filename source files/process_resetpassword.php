<?php
    $email = $pwd_hashed = $pwd = $lname = $fname = $pwd_confirm = $errorMsg = "";
    $success = true;
    // check email
    if (empty($_POST["email"])) {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    } else {
        $email = sanitize_input($_POST["email"]);
        // Additional check to make sure e-mail address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }

    // First, retrieve the email address from the form submission
    $email = $_POST['email'];

    // Next, retrieve the user's information from the database using the email address
    // You will need to replace 'your_database_name', 'your_username', 'your_password', and 'your_table_name' with your own database details
    $pdo = new PDO('mysql:host=localhost;dbname=your_database_name', 'your_username', 'your_password');
    $stmt = $pdo->prepare('SELECT * FROM your_table_name WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Check if a user with the given email address exists in the database
    if (!$user) {
        // If the user doesn't exist, display an error message and redirect back to the password reset form
        $displayMessage = array("status" => "error", "message" => "No user with that email address was found.");
        header('Location: reset_password.php?' . http_build_query($displayMessage));
        exit();
    }

    // If the user exists, retrieve the new password and confirmation password from the form submission
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if the two passwords match
    if ($newPassword !== $confirmPassword) {
        // If the passwords don't match, display an error message and redirect back to the password reset form
        $displayMessage = array("status" => "error", "message" => "The new passwords do not match.");
        header('Location: reset_password.php?' . http_build_query($displayMessage));
        exit();
    }

    // If the passwords match, hash the new password using a secure algorithm
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update the user's password in the database
    $stmt = $pdo->prepare('UPDATE your_table_name SET password = ? WHERE email = ?');
    $stmt->execute([$hashedPassword, $email]);

    // Display a success message and redirect to the login page
    $displayMessage = array("status" => "success", "message" => "Your password has been reset.");
    header('Location: login.php?' . http_build_query($displayMessage));
    exit();
?>