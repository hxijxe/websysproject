<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include "nav.inc.php";
?>

<body>
    <main class="container">
    <?php
        session_name("session_forgotpassword");
        session_start();

        // Initialize variables
        $pwd = $pwd_hashed = $pwd_confirm =$email = $errorMsg = "";
        $success = true;

        $_SESSION['email'] = $email;
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
                $pwd_hashed = $_POST["pwd"];
            }
        }


        // Retrieve email and member id from session
        $member_id = $_SESSION['member_id'];

        // Create database connection
        $config = parse_ini_file('../../private/db-config.ini');
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

        // Check connection
        if ($conn->connect_error) {
            $errorMsg = "Connection failed: " . $conn->connect_error;
            $success = false;
        }else {
            // Update member data in SQL table
            $query = "UPDATE webproject5.members SET password='$pwd_hashed' WHERE member_id='$member_id'";
            if (mysqli_query($conn, $query)) {
//                $errorMsg = "Member data updated successfully";
//                echo "<script> window.location.href='login_signup.php';</script>";
            } else {
                $errorMsg = "Error updating member data: " . mysqli_error($conn);
                $success = false;
            }
        }
        // Display error message if there was an issue updating the member data
        if (!$success) {
            echo "<section class='about-section text-center'>
                                    <div class='container px-4 px-lg-5'>
                                        <div class='row gx-4 gx-lg-5 justify-content-center'>
                                            <div class='col-lg-8'>
                                                <h2 class='text-white mb-4'>Please return to login and try again!</h2>
                                                <p class='text-white-50'>
                                                    $errorMsg
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                 <div class='container form-group'><button class='btn btn-warning' type='button' onclick='history.back();'>Return to Login</button></div>";
        }else{
            echo "<section class='about-section text-center'>
                                    <div class='container px-4 px-lg-5'>
                                        <div class='row gx-4 gx-lg-5 justify-content-center'>
                                            <div class='col-lg-8'>
                                                <h2 class='text-white mb-4'>Successfully reset password</h2>
                                                <p class='text-white-50'>
                                                    Welcome back to SIT Active Gym Classes!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                 <div class='container form-group'><button class='btn btn-success' type='button' onclick='history.back();'>Return to Login</button></div>";
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