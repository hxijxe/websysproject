<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Locations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<?php
include "nav.inc.php";
?>

<header class="about-section text-center">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 ">
            <div class="col-lg-8" style="text-align: left;">
                <h4 style="color: red;">Locations</h4>
                <h1 class="text-white mb-4">Find a gym near you </h1>
            </div>
        </div>
    </div>
</header>

<body>


    <main class="container">
        <section id="maps">
            <div class="row">
                <article class="col-sm">
                    <h2>6 Locations</h2>
                    <h5>View all locations on map</h5>
                    <!--<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1WKqrR1eSDbEUGRTD6MtdDnTMbgEJcM8&ehbc=2E312F" width="800" height="480">
                    </iframe>-->

                </article>

            </div>
        </section>

        <section class="property-grid grid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="grid-option">
                            <form>
                                <select class="custom-select">
                                    <option selected>All</option>
                                    <option value="1">Upcoming</option>
                                    <option value="2">Zumba</option>
                                    <option value="3">Yoga</option>
                                    <option value="4">Gym</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="img/sitnyp.jpg" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="#">SIT @ NYP</a>

                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">rent | $ 12.000</span>
                                        </div>
                                        <a href="https://www.singaporetech.edu.sg/campus-locations#nyp" class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>


        </section>

    </main>



















</body>
<?php
include "footer.inc.php";
?>



</html>