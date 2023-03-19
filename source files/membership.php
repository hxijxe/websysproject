<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <link rel="stylesheet" href="css/styles.css">
        <title>SIT Active Gym Membership</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    </head>

    <?php
    include "nav.inc.php";
    ?>

    <body>
        <section class="about-section text-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                            The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
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
        <div class="container px-5 px-lg-5">
            <div class="row">
                <div class="text-center card-body">
                    <h3>MEMBERSHIP FEATURES</h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="text-center">
                        <h3>No Joining Fee</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h3>No Joining Fee</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h3>No Joining Fee</h3>
                    </div>
                </div>
            </div>
        </div>
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