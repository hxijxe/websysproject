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
    <main id="adl">
        <div class="fcontainer">
            <!-- <form action="admindashboard.php" method="POST"> -->
            <form>
                <h2>Admin Login</h2>

                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>
                <!-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
            </form>
        </div>


        <?php
        $success = 0;
        if ($success = 0) {
            $email = "";
            $pwd  = "";
            $errorMsg = "";
        }


        // // check email
        // if (empty($_POST["email"])) {
        //     $errorMsg .= "Email is required.<br>";
        //     $success = false;
        // } else {
        //     $email = sanitize_input($_POST["email"]);
        //     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         $errorMsg .= "Invalid email format.<br>";
        //         $success = false;
        //     }
        // }

        // // Password validation
        // if (empty($_POST["pwd"])) {
        //     $errorMsg .= "Password is required.<br>";
        //     $success = false;
        // } else {
        //     $pwd = sanitize_input($_POST["pwd"]);
        // }


        //Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //check if form was submitted
        if (isset($_POST['submit'])) {

            // Create database connection.
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['email'], $config['password'], $config['dbname']);

            // Check connection,
            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                echo '<script>alert(' . $errorMsg . ')</script>';
                $success = false;
            } else {
                // Prepare the statement:
                try {
                    $sql = "SELECT * FROM admin_user 1;";
                    $result = $conn->query($sql);
                    $row = mysqli_fetch_assoc($result);

                    $email = sanitize_input($_POST['email']);
                    $pwd = $_POST['pwd'];
                    if ($email == $row['email'] && $pwd == $row['password']) {
                        $success = 1;
                        header("Location:admindashboard.php");
                        exit;
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






    </main>
</body>










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