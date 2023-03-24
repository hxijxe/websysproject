<!DOCTYPE html>
<html>
    <body>
        <main class="container">
        <?php
            $email = $pwd = $errorMsg = "";
            $success = true;

            // Email validation
            if (empty($_POST["email"])) {
                $errorMsg .= "Email is required.<br>";
                $success = false;
            } else {
             $email = sanitize_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                 $errorMsg .= "Invalid email format.<br>";
                 $success = false;
             }
            }
            authenticateUser();
            //Display the message
            if ($success) {
                echo "<h1 class='container'>Login successful!</h1>";
                $fname = $_SESSION['fname'];
                $lname = $_SESSION['lname'];
                echo "<h2 class='container'>Welcome back, " . ucfirst($fname) . " " . ucfirst($lname) . ".</h2>";
                echo "<div class='container form-group'><button class='btn btn-success' type='button' onclick='returnhome()'>Return to Home</button></div>
                    <script>
                        function returnhome() {
                        window.location.href='index.php';
                        }
                        </script>";
            } 
            else {
                echo "<h1 class='container'>Oops!</h1>";
                echo "<h2 class='container'>The following errors were detected:</h2>";
                echo "<p class='container'>" . $errorMsg . "</p>";
                echo "<div class='container form-group'><button class='btn btn-warning' type='button' onclick='history.back();'>Return to Login</button></div>";
            }
            
            //Helper function that checks input for malicious or unwanted content.
            function sanitize_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

                
            /*
             * Helper function to authenticate the login.
             */
            function authenticateUser()
            {
                global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;

                // Create database connection.
                $config = parse_ini_file('../../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

                // Check connection,
                if ($conn->connect_error)
                {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                }
                else
                {
                    // Prepare the statement:
                    $stmt = $conn->prepare("SELECT * FROM members WHERE email=?");

                    // Bind & execute the query statement:
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0)
                    {
                        // Note that email field is unique, so should only have
                        // one row in the result set.
                        $row = $result->fetch_assoc();
                        $fname = $row["fname"];
                        $lname = $row["lname"];
                        $pwd_hashed = $row["password"];

                        // Check if the password matches:
                        if (!password_verify($_POST["pwd"], $pwd_hashed))
                        {
                            // Don't be too specific with the error message - hackers don't
                            // need to know which one they got right or wrong. :)
                            $errorMsg = "Email not found or password doesn't match...";
                            $success = false;
                        }
                    }
                    else
                    {
                        $errorMsg = "Email not found or password doesn't match...";
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
