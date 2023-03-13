<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script defer src="js/scripts.js"></script>
</head>

<?php
include "nav.inc.php";
?>

<body>
    <section class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Login/Sign up</h2>
                    <p class="text-white-50">
                        Welcome to SIT Gym
                        Wanna save a spot in your favourite class?
                        No problem - we've got you covered. SIT Gym is filled with features designed
                        to help you at every step of your health and fitness journey.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <form class="container">
        <div class="column gx-4 gx-lg-5 justify-content-center">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFirstName">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required maxlength="45" placeholder="Enter First Name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleLastName">Last Name</label>
                <input type="text" class="form-control" id="lanme" name="lname" required maxlength="45" placeholder="Enter Last Name">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required placeholder="Password">
            </div>
            <br>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

<?php
include "footer.inc.php";
?>

</html>