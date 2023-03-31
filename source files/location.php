<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/locationtest.css">
    <link rel="stylesheet" href="css/countdown.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/location.js"></script>
    <script defer src="js/countdown.js"></script>
    <title>SIT Active Gym Locations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
    include "nav.inc.php";
    ?>

</head>


<body>
<!-- header section that includes a container with a row and a column element, where the title of the page "Locations" is displayed in red, 
and a subtitle "Find a gym near you" is displayed in white.  -->
    <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h1 style="color: red;">Locations</h1>
                    <h2 class="text-white mb-4">Find a gym near you </h2>
                </div>
            </div>
        </div>
    </header>

    <main class="container">

    <section id="maps">
        <div class="row">
                <h2>6 Locations</h2>
                <!-- This section displays a Google Maps iframe with 6 locations marked on the map --> 
                <h3 class="collapsible">View all locations on map</h3>
                <div class="content">
                    <div style="width: 100%; overflow: hidden; height: 600px;">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1WKqrR1eSDbEUGRTD6MtdDnTMbgEJcM8&ehbc=2E312F" width="1800" height="600" style="border:0; margin-top: -60px;">
                        </iframe>
                    </div>
                </div>
        </div>
    </section>


    <div class='main-container'>
        <div class='grid-container'>
            <div class='card card--featured'>
                <div class='card__side-by-side--m'>
                    <div class='card__image'>
                        <img src='img/sitnew.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="new campus">
                    </div>
                    <div class='card__content padding-large--l' style="width:100%">
                        <h2>COMING SOON!</h2>
                        <div class="rowmap">
                            <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <p class="kD9RoPu">View on map</p>
                            </a>

                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- This is the main container for the page -->
        <div class='main-container'>
            <div class='grid-container'>
                <div class='card card--featured'>
                    <!-- this div arranges the image and content side by side on medium screens -->
                    <div class='card__side-by-side--m'>
                        <!-- this div contains the image -->
                        <div class='card__image'>
                            <!-- This is the image source for the featured card -->
                            <img src='img/sitnew.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="new campus">
                        </div>
                        <!-- This div contains the content -->
                        <div class='card__content padding-large--l' style="width:100%">
                         <!-- This is the heading for the featured card -->
                            <h2>COMING SOON!</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <!-- This is the name of the location -->
                            <p>SIT @ PUNGGOL</p>
                              <!-- This div contains a countdown timer -->
                            <div class="clockdiv" id="clockdiv">
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
                            <!-- This is a description of the location -->
                            <p>Reimagining Education as an Applied Learning University</p>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <!-- This is a button to find out more about the location -->
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid-container'>
                <div class='card card--featured'>
                    <div class='card__side-by-side--m'>
                        <div class='card__image'>
                            <img src='img/sitnyp.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit nyp">
                        </div>
                        <div class='card__content padding-large--l' style="width:100%">
                            <h2>SIT @ NYP</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Nanyang Polytechnic</p>
                            <address>172A Ang Mo Kio Avenue 8, Singapore 567739
                                (beside Blk Q of NYP campus)</address>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid-container'>
                <div class='card card--featured'>
                    <div class='card__side-by-side--m'>
                        <div class='card__image'>
                            <img src='img/sittp.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit tp">
                        </div>
                        <div class='card__content padding-large--l' style="width:100%">
                            <h2>SIT @ TP</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Temasek Polytechnic</p>
                            <address>Blk 29B Tampines Avenue 1, Singapore 528694</address>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid-container'>
                <div class='card card--featured'>
                    <div class='card__side-by-side--m'>
                        <div class='card__image'>
                            <img src='img/sitdover.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit dover">
                        </div>
                        <div class='card__content padding-large--l' style="width:100%">
                            <h2>SIT @ DOVER</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Main Campus</p>
                            <address>10 Dover Drive Singapore 138683</address>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid-container'>
                <div class='card card--featured'>
                    <div class='card__side-by-side--m'>
                        <div class='card__image'>
                            <img src='img/sitrp.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit rp">
                        </div>
                        <div class='card__content padding-large--l' style="width:100%">
                            <h2>SIT @ RP</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Republic Polytechnic</p>
                            <address>Republic Polytechnic 43 Woodlands Avenue 9, Singapore 737729</address>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid-container'>
                <div class='card card--featured'>
                    <div class='card__side-by-side--m'>
                        <div class='card__image'>
                            <img src='img/sitsp.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit sp">
                        </div>
                        <div class='card__content padding-large--l' style="width:100%">
                            <h2>SIT @ SP</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Singapore Polytechnic</p>
                            <address> 510 Dover Road, Singapore 139660</address>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class='grid-container'>
                <div class='card card--featured'>
                    <div class='card__side-by-side--m'>
                        <div class='card__image'>
                            <img src='img/sitnp.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit np">
                        </div>
                        <div class='card__content padding-large--l' style="width:100%">
                            <h2>SIT @ NP</h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Ngee Ann Polytechnic</p>
                            <address> 537 Clementi Road, Singapore 599493</address>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn-primary">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <!--Bootstrap JS-->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script defer src="js/scripts.js"></script>
    <script defer src="js/logout.js"></script>
</body>

<?php
include "footer.inc.php";
?>



</html>