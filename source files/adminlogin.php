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
            <form>
                <h2>Admin Login</h2>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>


        <?php
        $success = 0;
        if ($success = 0) {
            $email = "";
            $password  = "";
            $errorMsg = "";
        }


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
            $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

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
                    $password = $_POST['pwd'];
                    if ($email == $row['email'] && $password == $row['password']) {
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