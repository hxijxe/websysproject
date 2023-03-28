<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>SIT Active Gym Classes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    </head>

    <?php
    include "nav.inc.php";
    ?>
    <body>
        <main class="container">
        <?php
            $email = $pwd = $fname = $lname = $errorMsg = "";
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
                echo "<section class='about-section text-center'>
                        <div class='container px-4 px-lg-5'>
                            <div class='row gx-4 gx-lg-5 justify-content-center'>
                                <div class='col-lg-8'>
                                    <h2 class='text-white mb-4'>Login successful!</h2>
                                    <p class='text-white-50'>
                                        Welcome back, " . ucfirst($fname) . " " . ucfirst($lname) . "
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                     <div class='container form-group'><button class='btn btn-success' type='button' onclick='returnhome()'>Return to Home</button></div>
                        <script>
                            function returnhome() {
                            window.location.href='index.php';
                            }
                        </script>";
            } 
            else {
                echo "<section class='about-section text-center'>
                        <div class='container px-4 px-lg-5'>
                            <div class='row gx-4 gx-lg-5 justify-content-center'>
                                <div class='col-lg-8'>
                                    <h2 class='text-white mb-4'>Login unsuccessful!</h2>
                                    <p class='text-white-50'>
                                        $errorMsg 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                     <div class='container form-group'><button class='btn btn-warning' type='button' onclick='history.back();'>Return to Login</button></div>";
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
                    $stmt = $conn->prepare("SELECT * FROM webproject5.members WHERE email=?");

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

                        // storing user information in a session
                        session_start();
                        $_SESSION['fname'] = $fname;
                        $_SESSION['lname'] = $lname;
                        $_SESSION['email'] = $email;
                        $_SESSION['member_id'] = $row["member_id"];
                        $_SESSION["logged_in"] = true;
//                        header("location: index.php");

                        // Check if the password matches:
                        if (!password_verify($_POST["pwd"], $pwd_hashed))
                        {
                            // Don't be too specific with the error message - hackers don't
                            // need to know which one they got right or wrong. :)
                            $errorMsg = "Email not found or password doesn't match.";
                            $success = false;
                        }
                    }
                    else
                    {
                        $errorMsg = "Email not found or password doesn't match.";
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
