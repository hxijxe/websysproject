<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <title>SIT Active Gym About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<?php
include "nav.inc.php";
?>

<body>
    <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h1 style="color: red;">About Us</h4>
                    <h2 class="text-white mb-4">Get to know us better </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Our Story section -->
        <section class="text-center about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center ">
                    <div class="col-lg-8 border-story">
                        <h2 class="text-red mb-4">Our Story</h2>
                        <p class="text-black">
                        Since our humble beginnings in 2023, we started this company with a mission to bring fitness accessibility for everyone
                        affiliated with SIT. Our purpose is to ensure that the members of SIT have an outlet to take care of their physical well-being
                        while giving their best to the institute.
                        With more than 2,000 members around the region, we’re always looking for new ways 
                        to support and inspire them – and not just in the gym.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Access to other pages of the site -->
        <section class="text-center about">
            <div class="container px-5 px-lg-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                        <div class="text-center card-header">
                            <img src="img/sitdover.jpg" class="card-img-top" alt="..." style="background-size: cover; height: 200px;">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Locate Us</h3>
                            <h4 class="card-text text-dark ">6 Locations across Singapore</h4>
                        </div>
                        <div class="text-center card-footer">
                            <a class="btn btn-secondary mt-3 mb-3" href="location.php">Find Out More</a>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" >
                            <div class="text-center card-header">
                                <img src="img/zumba.jpg" class="card-img-top" alt="..." style="background-size: cover; height: 200px;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Explore Classes</h3>
                                <h4 class="card-text text-dark">Check out the classes that we provide</h4>
                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="explore.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="text-center card-header">
                                <img src="img/gym-bg.jpg" class="card-img-top" alt="..." style="background-size: cover;height: 200px;">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Sign Up with Us</h3>
                                <h4 class="card-text text-dark ">Kickstart your fitness Journey now</h4>
                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="login_signup.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Feedback form -->
        <section class="about">
            <div class="askaqns">
                <h3>Give Us a Feedback</h3>
                <form action="process_aboutus.php" method="post">

                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name..">
                    </div>

                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Your email...">
                    </div>
                    
                    <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea id="feedback" name="feedback" required placeholder ="Your feedback..."></textarea>
                    </div>

                    
                    <div class="rating-box">
                    <h1>Rate Our Service?</h1>
                    <p>Give us a quick rating so we know if you like it.</p></label>
                        <div class="stars">
                            <input type="hidden" id="rating" name="rating" value="-1">
                            <div class="bx bxs-star ratings_stars" data-rating="1"></div>
                            <div class="bx bxs-star ratings_stars" data-rating="2"></div>
                            <div class="bx bxs-star ratings_stars" data-rating="3"></div>
                            <div class="bx bxs-star ratings_stars" data-rating="4"></div>
                            <div class="bx bxs-star ratings_stars" data-rating="5"></div>
                        </div>
                    </div>  

                    <div class="form-group">
                    <input type="submit" value="Submit">
                    </div>

                </form>
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
<script defer src="js/aboutus.js"></script>
</body>

</html>