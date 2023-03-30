<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <script defer src="js/login.js"></script>
    <title>SIT Active Gym</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <a href="../login_signup.php">Login & Register</a>
</head>
<?php
include "nav.inc.php";
?>

<body>
    <main>
        <section class="login_signup">
            <!-- Register container -->
            <div class="container mt-5" id="container" style="min-height: 960px">
                <div class="form-container register-container">
                    <form action="process_register.php" method="post">
                        <h1>Register</h1>
                        <!-- First name -->
                        <input type="text" class="form-control" id="fname" required maxlength="45" name="fname" placeholder="Enter first name">
                        <!-- Last name -->
                        <input type="text" class="form-control" id="lname" required maxlength="45" name="lname" placeholder="Enter last name">
                        <!-- Email -->
                        <input type="email" class="form-control" id="registeremail" required name="email" placeholder="Enter email">
                        <!-- Password -->
                        <input type="password" class="form-control" id="registerpwd"  name="pwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+~`-={}[\]|:;&quot;'<>,.?\/]).{8,}" placeholder="Enter password">
                        <!--Password validation checker-->
<!--                        -->
<!--                        <section class="password-validation">-->
<!--                    <div class="icon">-->
<!--                                <i class='show bx bx-show hide'></i>-->
<!--                                <i class='slash bx bx-hide'></i>-->
<!--                            </div>-->
<!--                    <div class="valid-checks hidden">-->
<!--                        <ul class="checklist">-->
<!--                        <li class="lowercase"><i class="bx bx-check"></i>At least one lowercase letter</li>-->
<!--                        <li class="uppercase"><i class="bx bx-check"></i>At least one uppercase letter</li>-->
<!--                        <li class="number"><i class="bx bx-check"></i>At least one number</li>-->
<!--                        <li class="special"><i class="bx bx-check"></i>At least one special character</li>-->
<!--                        <li class="length"><i class="bx bx-check"></i>At least 8 characters</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    </section>-->


                        <!-- Confirm password -->
                        <input type="password" class="form-control" id="pwd_confirm" required minlength="8" name="pwd_confirm" placeholder="Confirm password">

                        <!--membership type-->
                        <div class="membershipType">
                            <input class="big" type="radio" id="basic" name="membership" value="Basic" required/>
                            <label for="basic">Basic</label>

                            <input class="big" type="radio" id="silver" name="membership" value="Silver" required/>
                            <label for="silver">Silver</label>

                            <input class="big" type="radio" id="gold" name="membership" value="Gold" required/>
                            <label for="gold">Gold</label>
                        </div>

                        <!-- Register button -->
                        <button type="submit">Register</button>
                        <!-- Register using social media -->
                        <span>or use your account</span>
                        <div class="social-container">
                            <a href="#" class="social">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-50 0 588 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                </svg>
                            </a>
                        </div>
                    </form>
                </div>
                <!-- Login container -->
                <div class="form-container login-container">
                    <form action="process_login.php" method="post">
                        <h1>Login</h1>
                        <!-- Email -->
                        <input type="email" class="form-control" id="loginemail" required name="email" placeholder="Enter email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
                        <!-- Password -->
                        <input type="password" class="form-control" id="loginpwd" required minlength="8" name="pwd" placeholder="Enter password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
                        <!-- Remember me -->
                        <div class="content">
                            <div class="checkbox">
                                <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
                                <label for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <!-- Forget password -->
                        <div class="content">
                            <div class="pass-link">
                                <a href="reset_password.php">Forgot password?</a>
                            </div>
                        </div>
                        <button type="submit">Login</button>
                        <p>
                            <a href="adminlogin.php">Admin Login</a>
                        </p>
                        <!-- Login using social media -->
                        <span>or use your account</span>
                        <div class="social-container">
                            <a href="#" class="social">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-50 0 588 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                </svg>
                            </a>
                        </div>
                    </form>
                </div>
                <!-- Sliding container for login/register -->
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-left">
                            <h1 class="title">Hello <br>Sitizens</h1>
                            <p>Have an account? <br> Click here to login.</p>
                            <p>
                                For admin login
                                <a href="adminlogin.php">Admin page</a>.
                            </p>
                            <button class="ghost" id="login">Login<i class="lni lni-arrow-left login"></i>
                            </button>
                        </div>
                        <div class="overlay-panel overlay-right">
                            <h1 class="title">Not a member?<br>Start your journey with us</h1>
                            <p>if you don't have an account yet, sign up and start your journey with us!</p>
                            <button class="ghost" id="register">Register
                                <i class="lni lni-arrow-right register"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include "footer.inc.php";
    ?>

    <!--jQuery-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <!--Bootstrap JS-->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>

    <script defer src="js/scripts.js"></script>

</body>

</html>