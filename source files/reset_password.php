<!DOCTYPE html>
<html lang="en-GB">
<HEAD>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
</HEAD>
<?php
include "nav.inc.php";
?>
<BODY>
<main class="container">
    <section class='about-section text-center'>
        <div class='container px-4 px-lg-5'>
            <div class='row gx-4 gx-lg-5 justify-content-center'>
                <div class='col-lg-8'>
                    <h2 class='text-white mb-4'>Forgot Password</h2>
                    <p class='text-white-50'>
                        Please enter your email address to receive a password reset link.</p>
                    <form action="process_resetpassword.php" method="post">
                        <div class="row">
                            <div class="inline-block">
                                <!-- Password -->
                                <input type="password" class="form-control" id="pwd"  name="pwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+~`-={}[\]|:;&quot;'<>,.?\/]).{8,}" placeholder="Enter password">
                            </div>
                            <div class="inline-block">
                                <!-- Confirm password -->
                                <input type="password" class="form-control" id="pwd_confirm" required minlength="8" name="pwd_confirm" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-secondary mt-3 mb-3" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
<script defer src="js/login.js"></script>
</body>
</html>