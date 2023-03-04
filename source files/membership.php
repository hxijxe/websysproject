<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <link rel="stylesheet" href="css/styles.css">
        <title>SIT Active Gym Membership</title>
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
                        <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                            The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>

        <section class="projects-section bg-body" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <div class="text-center card-header" style="background-color: #414a4c;">
                                <img src="img/sit_logo.png" class="card-img-top membImg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Basic Tier</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="registerpage.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" >
                            <div class="text-center card-header" style="background-color: #2f4f4f; ">
                                <img src="img/sit_logo.png" class="card-img-top membImg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Silver Tier</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>

                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="registerpage.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="text-center card-header" style="background-color: #483c32;">
                                <img src="img/sit_logo.png" class="card-img-top membImg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Gold Tier</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="text-center card-footer">
                                <a class="btn btn-secondary mt-3 mb-3" href="registerpage.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>