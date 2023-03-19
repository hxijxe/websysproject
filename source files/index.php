<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<?php
include "nav.inc.php";
?>

<body>
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">SIT Active Gym</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by
                        Start Bootstrap.</h2>
                    <a class="btn btn-primary" href="#about">Get Started</a>
                </div>
            </div>
        </header>

        <section>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/cycle.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block carousel-text-bg">
                            <h5>Weekly Cycling Classes</h5>
                            <p>Join us for some intense cycling sessions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/swim.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block carousel-text-bg">
                            <h5>Learn how to swim</h5>
                            <p>Let our professional instructors teach you how to swim</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/zumba.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block carousel-text-bg">
                            <h5>Try out our Zumba Classes</h5>
                            <p>Our energetic instructors will make you work up a sweat</p>
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
                                <h3 class="card-title">Basic Tier</h>
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

    </body>
</html>