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
    <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h4 style="color: red;">My Profile</h4>
                    <h1 class="text-white mb-4">Update Profile</h1>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
<?php

// Initialize variables
$fname = $lname = $errorMsg = "";
$success = true;

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

if($success){
    updateUser();
    echo"<section class='about-section text-center'>
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
                    </section>";
    echo '<div class="form-group"><a class="btn btn-success" '
                . 'href="profile.php">Back'
                . '</a></div>';
}else {
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
}
//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function updateUser()
{
    global $fname, $lname, $errorMsg, $success, $member_id;
    $member_id = $_SESSION['member_id'];
    // Create database connection
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);

    // Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        // Update member data in SQL table
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $member_id = $_SESSION['member_id'];
        $stmt = $conn->prepare("UPDATE webproject5.members SET fname=?, lname=? WHERE member_id=?");
        $stmt->bind_param("ssi", $fname, $lname, $_SESSION['member_id']);
        // Execute the query statement
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
