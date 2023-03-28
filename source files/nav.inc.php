<!--Font Awesome Javascript-->
<script src="https://kit.fontawesome.com/3d68f572d4.js" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top" style="background-color:black;">
    <div class="container px-4 px-lg-5">
    <a class="navbar-brand px-3" href="index.php"><img class="brand-logo" src="img/sit_logo.png" alt="sit logo" style="height: 80px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="membership.php">Membership</a></li>
                <li class="nav-item dropdown">
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
<!--                <li class="nav-item"><a class="nav-link" href="login_signup.php">Login/Signup</a></li>-->
                <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>

                <!--login icon-->
                <li class="nav-item"><a class="nav-link" href="login_signup.php"><i class="fa-solid fa-user fa-lg" style="color: #000000;"></i> Sign In</a></li>

                <!--Checks if user is logged in, if so user has the option to logout-->
                <?php
                if (isset($_SESSION['user_id'])):
                ?>

                <!--profile icon-->
                <li class="nav-item"><a class="nav-link link-primary" href="profile.php"><i class="fa-solid fa-id-card fa-lg" style="color: #da3832;"></i> Profile</a></li>
                <!--logout icon-->
                <li class="nav-item"><a class="nav-link link-primary" href="logout.php"><i class="fa-solid fa-right-from-bracket fa-lg" style="color: #000000;"></i> Logout</a></li>
                <?php
                endif;
                ?>

            </ul>
        </div>
    </div>
</nav>
