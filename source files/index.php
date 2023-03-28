<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/countdown.css">
    <title>SIT Active Gym</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<?php
include "nav.inc.php";
?>

<body>
    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img/cycle.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block carousel-text-bg">
                        <h5>Weekly Cycling Classes</h5>
                        <p>Join us for some intense cycling sessions</p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="img/sitnew.jpg" class="d-block w-100" alt="...">
                    <div class="container">
                        <div id="clockdiv">
                            <div>
                                <span class="days"></span>
                                <div class="smalltext">Days</div>
                            </div>
                            <div>
                                <span class="hours"></span>
                                <div class="smalltext">Hours</div>
                            </div>
                            <div>
                                <span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div>
                                <span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                            </div>
                        </div>
                        <div class="carousel-caption2 d-none d-md-block carousel-text-bg">
                            <div class="card__content padding-large">
                                <h2>COMING SOON!</h2>
                                <div class="rowmap">
                                    <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                        <p class="kD9RoPu">View on map</p>
                                    </a>
                                </div>
                                <p>SIT @ PUNGGOL</p>
                                <p>Reimagining Education as an Applied Learning University</p>
                                <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <div class="card__button">Find Out More</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/zumba.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block carousel-text-bg">
                        <h5>Join Our Blog Post</h5>
                        <a class="btn btn-secondary mt-3 mb-3" href="blog.php">Blog Page</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
        <section class="projects-section bg-body" id="projects">
            <div class="container px-5 px-lg-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="text-center card-header" style="background-color: #51123c;">
                                <img src="img/sit_logo.png" class="card-img-top membImg" alt="...">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Basic Tier</h3>
                                <h2 class="card-text text-dark mb-5">$16/week</h2>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="login_signup.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" >
                            <div class="text-center card-header" style="background-color: silver; ">
                                <img src="img/sit_logo.png" class="card-img-top membImg" alt="...">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Silver Tier</h3>
                                <h2 class="card-text text-dark mb-5">$25/week</h2>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="login_signup.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="text-center card-header" style="background-color: gold;">
                                <img src="img/sit_logo.png" class="card-img-top membImg" alt="...">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Gold Tier</h3>
                                <h2 class="card-text text-dark mb-5">$38/month</h2>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="login_signup.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include "footer.inc.php";
        ?>
        <!--jQuery-->
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <!--Bootstrap JS-->
        <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <script defer src="js/scripts.js"></script>
        <script defer src="js/countdown.js"></script>
    </body>
</html>