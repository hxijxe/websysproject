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


    $username = sanitize_input($_POST['username']); // Get input text
    $pwd = $_POST['pwd'];
    if ($username == "admin1" && $pwd == "12345678") {
        $success = 1;
    } else {
        $success = 2;
    }
}

//check code
if (isset($_POST['submitcode'])) {
    if (sanitize_input($code) == $randomString) {
        //*****rmb to change directory once server up */
        session_start();
        $_SESSION['login'] = "valid";
        echo '<script>alert("done ' . $_SESSION["login"] . '")</script>';
        echo '<script>window.location = "viewBookings.php";
        </script>';
        header("Location: viewBookings.php");
        exit();
    }
}


?>


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
        <!-- <img src="img/sit_logo.png" alt="Logo"> -->
        <h2>Admin Login</h2>
        <p>
            For members, please go to the
            <a href="login_signup.php">Register page</a>.
        </p>
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
        } ?>
        <?php

        if ($success == 1) {
            // sendmail();
            // echo "<br><br>Check mail for 2FA code";
            echo "<form action=\"\" method=\"post\" name=\"login\">" .
                "<div class='input-field'>" .
                "<label for='code'> Code:</label>" .
                "<input type='text' id='code' name='code' class='field' required>" .
                "</div>" .
                "<button type='submit' name='submitcode' class='abtn'>Submit code</button>";
        } else if ($success == 2) {
            echo "<br><label>Username or password incorrect<label><br>";
        }



        ?>
        </form>

    </div>

</main>

<?php
include "footer.inc.php";
?>
</body>

</html>