<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
    <title>SIT Active Gym</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<?php
include "nav.inc.php";
?>

<body>
    <main>
        <section style="padding-top: 50px;">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner2">
                    <div class="carousel-item">
                        <img src="img/cycle.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption3 d-none d-md-block carousel-text-bg">
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
                                    <div class="js8uwi">SIT @ PUNGGOL</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/zumba.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption3 d-none d-md-block carousel-text-bg">
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
        <section class="text-center py-5">
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

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 ">
                        <div class="col-lg-8" style="text-align: left;">
                            <h1 style="color: red;">Blog</h1>
                            <h2 class="text-black mb-4">Stay up to date with the current fitness scene.</h2>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-md-4" >
                        <div class="card h-100 mb-4 box-shadow">
                        <img class="card-img-top" src="img/swim.jpg" alt="swim">
                        <div class="card-body" >
                            <h5 class="text-muted">Hai Jie Di Lai</h5>
                            <p class="card-text">I enjoy the flexible timetable of booking the classes for swimming.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <a href="blog_article_haijiedilai.php" class="text-muted" >3 mins</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card h-100 mb-4 box-shadow">
                        <img class="card-img-top" src="img/yoga.jpg" alt="swim">
                        <div class="card-body">
                            <h5 class="text-muted">Lee Shee Ree</h5>
                            <p class="card-text">I love the relaxing yoga sessions. Would recommend and bring my friends here next time</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">7 mins</small>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 mb-4 box-shadow">
                        <img class="card-img-top" src="img/gym.jpg" alt="gym">
                        <div class="card-body">
                            <h5 class="text-muted">Yon Yee</h5>
                            <p class="card-text">The gym facility is large and clean. Would recommend.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">15 mins</small>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="blog.php"><p>>>>> click here to see more</p></a>
                </div>
            </div>
        </div>
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
                                <a class="btn btn-secondary mt-3 mb-3" href="profile.php">Get Started</a>
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
                                <a class="btn btn-secondary mt-3 mb-3" href="profile.php">Get Started</a>
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
                                <a class="btn btn-secondary mt-3 mb-3" href="profile.php">Get Started</a>
                            </div>
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
        <script defer src="js/logout.js"></script>
    </body>
</html>