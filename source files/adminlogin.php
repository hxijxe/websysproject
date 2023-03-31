<!DOCTYPE html>
<html lang="en">


<head>
    <!-- <link rel="stylesheet" href="css/location.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>SIT Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include "nav.inc.php";
?>

<body>
    <main id="adl">
        <div class="fcontainer">
            <form action = "process_adminlogin.php" method="post">
                <h1>Admin Login</h1>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" id="email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>

                <button type="submit" value="submit">Login</button>
            </form>
        </div>
    </main>

    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <!--Bootstrap JS-->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script defer src="js/scripts.js"></script>
</body>

<?php
include "footer.inc.php";
?>

</html>