<!DOCTYPE html>
<html>
    <body>
        <main class="container">
            <?php
            $email = $pwd_hashed = $cfmpassword = $lname = $fname = $errorMsg = "";
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

// check password
            if (empty($_POST["pwd"])) {
                $errorMsg .= "Password is required.<br>";
                $success = false;
            } else if (empty($_POST["pwd_confirm"])) {
                $errorMsg .= "Password Confirmation is required.<br>";
                $success = false;
            } else {
// check if password and confirmation password match
                if ($_POST["pwd"] !== $_POST["pwd_confirm"]) {
                    $errorMsg .= "Password must match Password Confirmation.<br>";
                    $success = false;
                } else {
                    $pwd_hashed = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
                }
            }

// check name
            if (empty($_POST["lname"])) {
                $errorMsg .= "Password is required.<br>";
                $success = false;
            } else {
                $lname = sanitize_input($_POST["lname"]);
            }

            if (!empty($_POST["fname"])) {
                $fname = sanitize_input($_POST["fname"]);
            }

//            if (empty($errorMsg)) {
//                saveMemberToDB();
//            }

            if ($success) {
                echo "<h1>Registration successful!</h1> \n";
                echo "<h4>Welcome " . $fname . " " . $lname . "!</h4> \n";
                echo '<div class="form-group"><a class="btn btn-success" '
                . 'href="login.php">Log-in'
                . '</a></div>';
                saveMemberToDB();
            } else {
                echo '<h1>Oops!</h1>';
                echo "<h4>The following input errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo '<div class="form-group"><a class="btn btn-danger" '
                . 'href="register.php">Return to Sign Up'
                . '</a></div>';
            }

//Helper function that checks input for malicious or unwanted content.
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

// Helper function to write the member data to the DB
            function saveMemberToDB() {
                global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;
// Create database connection.
                $config = parse_ini_file('../../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'],
                        $config['password'], $config['dbname']);
// Check connection
                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                } else {
// Prepare the statement:
                    $stmt = $conn->prepare("INSERT INTO members (fname, lname, email, password) VALUES (?, ?, ?, ?)");
// Bind & execute the query statement:
                    $stmt->bind_param("ssss", $fname, $lname, $email, $pwd_hashed);
                    if (!$stmt->execute()) {
                        $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                        $success = false;
                    }
                    $stmt->close();
                }
                $conn->close();
            }
            ?>

        </main>
    </body>
</html>
