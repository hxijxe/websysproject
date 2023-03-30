<?php


// include "includes/authenticate.inc.php";


$success = 0;
if ($success = 0) {
    $username = "";
    $pwd = "";
}


function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Check if form was submitted
if (isset($_POST['submit'])) { // Check if form was submitted

    // Create database connection.
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli(
        //$config['servername'],
        $config['username'],
        $config['password'],
        $config['dbname']
    );
    // Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        echo '<script>alert(' . $errorMsg . ')</script>';
    } else {
        // Prepare the statement:
        try {
            $sql = "SELECT * FROM admin_user limit 1;";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);

            $username = sanitize_input($_POST['username']); // Get input text
            $pwd = $_POST['pwd'];
            if ($username == $row['username'] && $pwd == $row['password']) {
                $success = 1;
                echo '<script>window.location = "adminbooking.php";
                    </script>';
                header("Location: adminbooking.php");
                exit();
            } else {
                $success = 2;
            }
        } catch (Exception $ex) {
            echo '<script>alert(' . $ex . ')</script>';
        }
    }
    $conn->close();
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- <link rel="stylesheet" href="css/location.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>SIT Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include "nav.inc.php";
?>


<body>

    <?php

    if ($_SESSION["login"] != null) {
        echo '<script>alert("Error! You are already logged in!")</script>';

        echo '<meta http-equiv="refresh" content="0;URL=\'index.php\'" />';
    } ?>
    <main id="adl">
        <div class="fcontainer">
            <img src="img/sit_logo.png" alt="Logo">
            <h2>Admin Login</h2>
            <?php

            if ($success == 0 || $success == 2) {
                echo "<form action=\"#\" method=\"post\" name=\"login\">" .
                    "<div class=\"input-field\">" .
                    "<label for=\"username\" >Username:</label>" .
                    "<input type=\"text\" id=\"username\" name=\"username\" class=\"field\" required>" .
                    "</div>" .
                    "<div class=\"input-field\">" .
                    "<label for=\"pwd\">Password:</label>" .
                    "<input type=\"password\" id=\"pwd\" name=\"pwd\" class=\"field\"  required>" .
                    "</div>" .
                    "<button type=\"submit\" name=\"submit\" class=\"abtn\">Login</button></form>";
            }?>
        </div>
        <div>
            <?php
            include "footer.inc.php";
            ?>
            <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
            </script>
            <!--Bootstrap JS-->
            <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
            </script>
            <script defer src="js/scripts.js"></script>
        </div>

</html>