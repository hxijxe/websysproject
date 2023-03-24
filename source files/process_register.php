<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>SIT Active Gym Classes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    </head>

    <?php
    include "nav.inc.php";
    ?>

    <body>
        <main class="container">
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


            if ($success) {
                saveMemberToDB();
                echo "<section class='about-section text-center'>
                        <div class='container px-4 px-lg-5'>
                            <div class='row gx-4 gx-lg-5 justify-content-center'>
                                <div class='col-lg-8'>
                                    <h2 class='text-white mb-4'>Registration successful!</h2>
                                    <p class='text-white-50'>
                                        Welcome on board, " . ucfirst($fname) . " " . ucfirst($lname) . "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                     <div class='container form-group'><button class='btn btn-success' type='button' onclick='returnlogin()'>Return to Login</button></div>
                        <script>
                            function returnlogin() {
                            window.location.href='login_signup.php';
                            }
                        </script>";
//                echo "<h1>Registration successful!</h1> \n";
//                echo "<h4>Welcome " . $fname . " " . $lname . "!</h4> \n";
//                echo '<div class="form-group"><a class="btn btn-success" '
//                . 'href="login_signuplogin_signup.php">Log-in'
//                . '</a></div>';
            } else {
                echo "<section class='about-section text-center'>
                        <div class='container px-4 px-lg-5'>
                            <div class='row gx-4 gx-lg-5 justify-content-center'>
                                <div class='col-lg-8'>
                                    <h2 class='text-white mb-4'>Registration unsuccessful!</h2>
                                    <p class='text-white-50'>
                                         $errorMsg 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                     <div class='container form-group'><button class='btn btn-warning' type='button' onclick='history.back();'>Return to Login</button></div>";
//                echo '<h1>Oops!</h1>';
//                echo "<h4>The following input errors were detected:</h4>";
//                echo "<p>" . $errorMsg . "</p>";
//                echo '<div class="form-group"><a class="btn btn-danger" '
//                . 'href="login_signup.php">Return to Sign Up'
//                . '</a></div>';
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
                    $stmt = $conn->prepare("INSERT INTO webproject5.members (fname, lname, email, password) VALUES (?, ?, ?, ?)");
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
        <?php
        include "footer.inc.php";
        ?>
        <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
        <!--Bootstrap JS-->
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
        </script>
        <script defer src="js/scripts.js"></script>
    </body>
</html>
