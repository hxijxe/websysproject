<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/countdown.css">
    <script defer src="js/location.js"></script>
    <script defer src="js/countdown.js"></script>
    <title>SIT Active Gym Locations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include "nav.inc.php";
?>



<body>
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
                <article class="col-sm">
                    <h2>6 Locations</h2>
                    <h5 class="collapsible">View all locations on map</h5>
                    <div class="content">
                        <div style="width: 100%; overflow: hidden; height: 600px;">
                            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1WKqrR1eSDbEUGRTD6MtdDnTMbgEJcM8&ehbc=2E312F" width="100%" height="600" frameborder="0" style="border:0; margin-top: -60px;">
                            </iframe>
                        </div>
                    </div>
                </article>
            </div>
        </section>


        <div class="main-container">
            <div class="grid-container row">
                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sitnew.jpg" alt="new campus"/>
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

                        </div>
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

                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sitnyp.jpg" alt="sit nyp" />
                        </div>
                        <div class="card__content padding-large">
                            <h2>SIT @ NYP </h2>
                            <div class="rowmap">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Nanyang Polytechnic</p>
                            <p>172A Ang Mo Kio Avenue 8, Singapore 567739
                                (beside Blk Q of NYP campus)</p>
                            <a href="location_SITNYP.php" class="RX4Lf26" target="_blank" rel="noreferrer">
                                <div class="card__button btn">Find Out More</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sittp.jpg" alt="sit tp" />
                        </div>
                        <div class="card__content padding-large">
                            <h2>SIT @ TP </h2>
                            <div class="rowmap ">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>

                                </a>
                            </div>
                            <p>Temasek Polytechnic</p>
                            <p>Blk 29B Tampines Avenue 1, Singapore 528694</p>
                            <div class="card__button btn">Find Out More</div>
                        </div>
                    </div>
                </div>

                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sitdover.jpg" alt="sit dover"/>
                        </div>
                        <div class="card__content padding-large">
                            <h2>SIT @ DOVER </h2>
                            <div class="JEeOWtm SEKXxkK">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Main Campus</p>
                            <p>10 Dover Drive Singapore 138683</p>

                            <div class="card__button btn">Find Out More</div>
                        </div>
                    </div>
                </div>

                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sitrp.jpg" alt="sit rp" />
                        </div>
                        <div class="card__content padding-large">
                            <h2>SIT @ RP </h2>
                            <div class="JEeOWtm SEKXxkK">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>




                                </a>
                            </div>
                            <p>Republic Polytechnic</p>
                            <p>Republic Polytechnic 43 Woodlands Avenue 9, Singapore 737729</p>

                            <div class="card__button btn">Find Out More</div>
                        </div>
                    </div>
                </div>

                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sitsp.jpg" alt="sit sp" />
                        </div>
                        <div class="card__content padding-large">
                            <h2>SIT @ SP </h2>
                            <div class="JEeOWtm SEKXxkK">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>
                                </a>
                            </div>
                            <p>Singapore Polytechnic</p>
                            <p> 510 Dover Road, Singapore 139660</p>

                            <div class="card__button btn">Find Out More</div>
                        </div>
                    </div>
                </div>

                <div class="card card--featured">
                    <div class="card__side-by-side--m">
                        <div class="card__image">
                            <img src="img/sitnp.jpg" alt="sit np"/>
                        </div>
                        <div class="card__content padding-large">
                            <h2>SIT @ NP </h2>
                            <div class="JEeOWtm SEKXxkK">
                                <a href="https://www.singaporetech.edu.sg/" class="RX4Lf26" target="_blank" rel="noreferrer">
                                    <p class="kD9RoPu">View on map</p>



                                </a>
                            </div>
                            <p>Ngee Ann Polytechnic</p>
                            <p> 537 Clementi Road, Singapore 599493</p>

                            <div class="card__button btn">Find Out More</div>
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

</body>

<?php
include "footer.inc.php";
?>



</html>