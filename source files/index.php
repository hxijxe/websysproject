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
        <!-- The section containing the carousel with three different items -->
        <section style="padding-top: 50px;">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner2">
                    <!-- First carousel item with an image and a caption for weekly cycling classes -->
                    <div class="carousel-item">
                        <img src="img/cycle.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption3 d-none d-md-block carousel-text-bg">
                            <h5>Weekly Cycling Classes</h5>
                            <p>Join us for some intense cycling sessions</p>
                        </div>
                    </div>
                    <!-- Second carousel item with an image, a countdown timer, and a caption for an upcoming event -->
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
                    <!-- Third carousel item with an image and a caption inviting users to join their blog page -->
                    <div class="carousel-item">
                        <img src="img/zumba.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption3 d-none d-md-block carousel-text-bg">
                            <h5>Join Our Blog Post</h5>
                            <a class="btn btn-secondary mt-3 mb-3" href="blog.php">Blog Page</a>
                        </div>
                    </div>
                </div>
                <!-- Navigation arrows for carousel -->
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <!-- Icon for previous arrow -->
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <!-- Text for screen readers or other assistive technology -->
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <!-- Icon for next arrow -->
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <!-- Text for screen readers or other assistive technology -->
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- This section displays the story of the company, including its mission and purpose. -->
        <section class="text-center py-5">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center ">
                    <div class="col-lg-8 border-story">
                        <h2 class="text-red mb-4">Our Story</h2>
                        <p class="text-black">
                            Since our humble beginnings in 2023, we started this company with a mission to bring fitness
                            accessibility for everyone
                            affiliated with SIT. Our purpose is to ensure that the members of SIT have an outlet to take
                            care of their physical well-being
                            while giving their best to the institute.
                            With more than 2,000 members around the region, we’re always looking for new ways
                            to support and inspire them – and not just in the gym.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- This is a container for the album section of the page -->
        <div class="album py-5 bg-light">

            <!-- This is a container for the album content -->
            <div class="container">

                <!-- This is a container for the blog header -->
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5 ">
                        <div class="col-lg-8" style="text-align: left;">

                            <!-- This is the blog title -->
                            <h1 style="color: red;">Blog</h1>

                            <!-- This is the blog subtitle -->
                            <h2 class="text-black mb-4">Stay up to date with the current fitness scene.</h2>

                        </div>
                    </div>
                </div>

                <!-- This is a container for the blog posts -->
                <div class="row py-3">

                    <!-- This is the first blog post -->
                    <div class="col-md-4">
                        <div class="card h-100 mb-4 box-shadow">
                            <img class="card-img-top" src="img/swim.jpg" alt="swim">
                            <div class="card-body">
                                <h5 class="text-muted">Hai Jie Di Lai</h5>

                                <!-- This is the content of the first blog post -->
                                <p class="card-text">I enjoy the flexible timetable of booking the classes for swimming.
                                </p>

                                <!-- This is a link to the first blog post -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="blog_article_haijiedilai.php" class="text-muted">3 mins</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- This is the second blog post -->
                    <div class="col-md-4">
                        <div class="card h-100 mb-4 box-shadow">
                            <img class="card-img-top" src="img/yoga.jpg" alt="swim">
                            <div class="card-body">
                                <h5 class="text-muted">Lee Shee Ree</h5>

                                <!-- This is the content of the second blog post -->
                                <p class="card-text">I love the relaxing yoga sessions. Would recommend and bring my
                                    friends here next time</p>

                                <!-- This is the time stamp for the second blog post -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">7 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- This is the third blog post -->
                    <div class="col-md-4">
                        <div class="card h-100 mb-4 box-shadow">
                            <img class="card-img-top" src="img/gym.jpg" alt="gym">
                            <div class="card-body">
                                <h5 class="text-muted">Yon Yee</h5>

                                <!-- This is the content of the third blog post -->
                                <p class="card-text">The gym facility is large and clean. Would recommend.</p>

                                <!-- This is the time stamp for the third blog post -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">15 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- This is a link to view more blog posts -->
                <div>
                    <a href="blog.php">
                        <p>>>>> click here to see more</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- This section displays the pricing plans available to customers -->
        <section class="projects-section bg-body" id="projects">
            <!-- The container holds the contents of the section -->
            <div class="container px-5 px-lg-5">
                <!-- This div contains the header and description of the section -->
                <div class="pricing-header px-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Pricing</h1>
                    <p class="lead">Select the perfect gym membership plan to meet your fitness goals and budget. Our
                        plans are
                        designed to offer you flexibility and variety, so you can get the most out of your workouts.</p>
                </div>
                <!-- This div contains the cards with the pricing plans -->
                <div class="card-deck mb-3 text-center row row-cols-1 row-cols-md-3 g-4">
                    <!-- The following three divs represent the three pricing tiers -->
                    <div class="col">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Basic Tier</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$12 <small class="text-muted">/ mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>2 booking per week</li>
                                    <li>Limited amenities</li>
                                    <li>Cancellation fee</li>
                                    <li>No Personal training options</li>
                                </ul>
                                <a class="btn btn-secondary mt-3 mb-3" href="profile.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Silver Tier</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$18 <small class="text-muted">/ mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>4 booking per week</li>
                                    <li>All amenities</li>
                                    <li>Cancellation fee</li>
                                    <li>Some Personal training options</li>
                                </ul>
                                <a class="btn btn-secondary mt-3 mb-3" href="profile.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h4 class="my-0 font-weight-normal">Gold Tier</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>7 booking per week</li>
                                    <li>All amenities</li>
                                    <li>No cancellation fee</li>
                                    <li>Some Personal training options</li>
                                </ul>
                                <a class="btn btn-secondary mt-3 mb-3" href="profile.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- This div contains the link to the membership page -->
                    <a href="membership.php">
                        <p>>>>> click here to see more</p>
                    </a>
                </div>
        </section>
    </main>

    <?php
    include "footer.inc.php";
    ?>
    <!--jQuery-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>

    <!--Bootstrap JS-->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
        </script>
    <script defer src="js/scripts.js"></script>
    <script defer src="js/countdown.js"></script>
    <script defer src="js/logout.js"></script>
</body>

</html>