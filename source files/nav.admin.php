<?php
// Set the session name and start the session
session_name("session_admin");
session_start();
?>

<nav class="navbar navbar-expand-xl navbar-dark bg-black fixed-top">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand flexstart" href="index.php"><img class="brand-logo" src="img/sit_logo.png" alt="sit logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--FOR ADMIN-->
            <!--admin not logged in to account -->
            <?php if (! isset($_SESSION["logged_in"])): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="membership.php">Membership</a></li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Classes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="classes.php">Time Table</a>
                            <a class="dropdown-item" href="explore.php">Explore</a>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>
                </ul>
                <div>
                    <a href="login_signup.php" class="nav-btn"> Login/Signup</a>
                </div>
            <?php endif; ?>
            <!--admin logged into account-->
            <?php if (isset($_SESSION["logged_in"])): ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="membership.php">Membership</a></li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Classes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="classes.php">Time Table</a>
                            <a class="dropdown-item" href="explore.php">Explore</a>
                        </div>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="location.php">Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>
                </ul>
                <div>
                    <!--                    <a href="profile.php" class="nav-btn"> Profile</a>-->
                    <a href="logout.php" class="nav-btn"> Logout</a>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</nav>

