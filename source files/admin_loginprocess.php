<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <script defer src="js/admin.js"></script>
    <title>Admin </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

</body>
<?php
include "nav.inc.php";
?>

<main>
    <div class="fcontainer">
        <?php
        $username = $pwd_hashed = $errorMsg = "";
        $success = true;

        //check username
        if (empty($_POST['username'])) {
            $errorMsg .= "Username is required.<br>";
            $success = false;
        } else {
            $username = sanitize_input($_POST['username']);
            //check if username = fixed value 
        }
        // check password
        if (empty($_POST["pwd"])) {
            $errorMsg .= "Password is required.<br>";
            $success = false;
        } else {
            $pwd_hashed = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
        }

        // if there are no error messages, authenticate user
        if (empty($errorMsg)) {
            authenticateUser();
        }


        // welcome user or print authentication error message            
        if ($success) {
            echo "<h1>Log in successfully!</h1> \n";
            echo "<h4>Welcome Admin !</h4> \n";
            echo '<div class="form-group"><a class="btn btn-success" '
                . 'href="login.php">Return to index'
                . '</a></div>';
        } else {
            echo '<h1>Oops!</h1>';
            echo "<h4>The following input errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
            echo '<div class="form-group"><a class="btn btn-danger" '
                . 'href="register.php">Return to Log in'
                . '</a></div>';
        }

        //Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function authenticateUser()
        {
            global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;
            // Create database connection.
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli(
                $config['servername'],
                $config['username'],
                $config['password'],
                $config['dbname']
            );
            // Check connection
            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                // Prepare the statement:
                $stmt = $conn->prepare("SELECT * FROM webproject5 WHERE username=?");
                // Bind & execute the query statement:
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    // Note that email field is unique, so should only have
                    // one row in the result set.
                    $row = $result->fetch_assoc();
                    $username = $row["username"];
                    $pwd_hashed = $row["password"];
                    // Check if the password matches:
                    if (!password_verify($_POST["pwd"], $pwd_hashed)) {
                        // Don't be too specific with the error message - hackers don't
                        // need to know which one they got right or wrong. :)
                        $errorMsg = "Email not found or password doesn't match...";
                        $success = false;
                    }
                } else {
                    $errorMsg = "Email not found or password doesn't match...";
                    $success = false;
                }
                $stmt->close();
            }
            $conn->close();
        }
        ?>
    </div>

</main>