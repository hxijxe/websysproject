<!DOCTYPE html>
<html lang="en-GB">
<HEAD>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
</HEAD>
<?php
include "nav.inc.php";
?>
<BODY>
<main class="container">
    <section class='about-section text-center'>
        <div class='container px-4 px-lg-5'>
            <div class='row gx-4 gx-lg-5 justify-content-center'>
                <div class='col-lg-8'>
                    <h2 class='text-white mb-4'>Forgot Password</h2>
                    <p class='text-white-50'>
                        Please enter your email address to receive a password reset link.</p>
                    <form name="Re-enterPassword" action="process_resetpassword.php" method="post">
                        <div class="row">
                            <div class="inline-block">
                                <input type="email" class="form-control" name="new_pass" id="new_pass" required name="email" placeholder="Enter New Password">
                            </div>
                            <div class="inline-block">
                                <input type="email" class="form-control" name="re_pass" id="re_pass" required name="email" placeholder="Re-enter New Password">
                            </div>
                        </div>
                        <div class="row">
                            <a class="btn btn-secondary mt-3 mb-3" type="submit" id="submit-btn">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
$token = $_GET['token'];
?>

<?php
include "footer.inc.php";// Step 2: Generate a unique reset token and store it in the database

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email='$email'";
    // Create database connection.
    $config = parse_ini_file('../../private/db-config.ini');
    $connection = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // Generate a unique reset token
        $reset_token = bin2hex(random_bytes(32));

        // Store the reset token, email, and timestamp in the database
        $query = "INSERT INTO password_resets (email, reset_token, created_at) VALUES ('$email', '$reset_token', NOW())";
        mysqli_query($connection, $query);

        // Step 3: Send an email to the user containing the reset link
        $reset_link = "http://35.212.241.67/webproject5/forgot_password.php?token=$reset_token";
        $to = $email;
        $subject = "Password reset request";
        $message = "Click the following link to reset your password: $reset_link";
        $headers = "From: Your Website <noreply@yourwebsite.com>\r\n";
        $headers .= "Reply-To: noreply@yourwebsite.com\r\n";
        $headers .= "Content-type: text/html\r\n";
        mail($to, $subject, $message, $headers);

        // Show a success message to the user
        echo "An email has been sent to $email with instructions on how to reset your password.";
    } else {
        // Show an error message if the email does not exist in the database
        echo "That email address is not registered with us.";
    }
}

// Step 5: Update the password in the database

if (isset($_POST['reset_password'])) {
$reset_token = $_POST['reset_token'];
$new_password = $_POST['new_password'];

// Check if the reset token exists and has not expired
$query = "SELECT * FROM password_resets WHERE reset_token='$reset_token' AND created_at >= NOW() - INTERVAL 1 HOUR";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) == 1) {
// Get the email associated with the reset token
$row = mysqli_fetch_assoc($result);
$email = $row['email'];

// Update the password for the user associated with the email address
$hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
$query = "UPDATE users SET password='$hashed_password' WHERE email='$email'";
mysqli_query($connection, $query);

// Show a success message to the user
echo "Your password has been updated successfully.";
} else {
// Show an error message if the reset token is invalid or has expired
    echo "Invalid or expired reset link.";
}
}
?>


<?php
include "footer.inc.php";
?>
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>
<!--Bootstrap JS-->
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
</script>
<script defer src="js/scripts.js"></script>
<script defer src="js/login.js"></script>
</body>
</html>