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



<html>

<body>
    <?php
    include "nav.inc.php";
    ?>
    <div class="container-login100">
        <form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <span class="login100-form-title">
                Admin Login
            </span>
            <p>
                For members, please go to the
                <a href="login_signup.php">Register page</a>.
            </p>
            <div class="wrap-input100 validate-input" data-validate="Username is required">
                <input class="input100" type="text" id="username" name="username" placeholder="Enter Username" label="username" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" id="password" name="password" placeholder="Enter password" label="password" required>
                <span class="focus-input100"></span>
            </div>
            <div class="row" id="indexerror">
                <?php
                if (!empty($errorMsg)) {
                    echo "<div class='alert alert-danger alert-dismissible fade show' style='margin-bottom:20px;'> " . $errorMsg . "</div>";
                }
                ?>
            </div>
            <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit">Submit</button>
            </div>
        </form>
    </div>


    <!-- <main class="container-login">
        </section>
        <h1>Admin Login</h1>
        <p>
            For members, please go to the
            <a href="login_signup.php">Register page</a>.
        </p>
        <form action="admin_login.php" method="post">
            <div class="wrap-input100 validate-input">
                <label for="username">Username:</label>
                <input class="input100" type="username" id="username" name="username" required placeholder="Enter username">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input">
                <label for="pwd">Password:</label>
                <input class="input100" type="password" id="pwd" name="pwd" required placeholder="Enter password">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Log In</button>
            </div>

        </form>
    </main> -->

    <?php
    include "footer.inc.php";
    ?>
</body>

</html>