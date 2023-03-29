<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/location.js"></script>
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
                    <h4 style="color: red;">Locations</h4>
                    <h1 class="text-white mb-4">SIT @ NYP </h1>
                    <p class="text-white mb-4">172 Ang Mo Kio Ave 8, Singapore 567739</p>
                    <div class="rowmap">
                                    <a href="https://goo.gl/maps/GTgQQDEU93pAnhkP6" class="RX4Lf26" target="_blank" rel="noreferrer">
                                        <p class="kD9RoPu">View on map</p>
                                    </a>
                                </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <!-- Picture -->
            <div class="row">
                <img src="img/gym-bg.jpg" alt="..." >
            </div>
            <!-- Information -->
            <div class="row" style= "padding-top: 5rem">
                <div class="col-sm-4 text-center">
                    <div>
                    <p> Operating Hours</p></div>
                    <div>
                    <p> Monday-Friday: 9:00am - 9:00pm</p></div>
                    <div>
                    <p> Saturday: 9:00am - 10:00pm</p></div>
                    <div>
                    <p> Sunday: 9:00am - 5:00pm</p></div>
                </div>

                <div class="col-sm-4 text-center">
                    <div>
                    <p> Contact Us</p></div>
                    <div>
                    <p> Telephone: 6543 2109</p></div>  
                    <div>
                    <p> Email: Nyp@sitgym.com</p></div>             
                </div>

                <div class="col-sm-4 text-center">
                    <a class="btn btn-secondary mt-3 mb-3" href="classes.php">View timetable</a>
                </div>

            </div>

            <div class="row" style="padding-top:5rem; padding-bottom:5rem">
                <div class="row">
                    <div>
                        <h2> Classes offered</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div>
                            <p> Yoga</p> <img src="img/yoga.jpg" alt="..." class="img-fluid"></div> 

                        </div>
                        <div class="col-sm-4 text-center">
                            <div>
                            <p> Zumba</p><img src="img/zumba.jpg" alt="..." class="img-fluid"></div> 
                        </div>
                        <div class="col-sm-4 text-center">
                            <div>
                            <p> Gym</p><img src="img/gym.jpg" alt="..." class="img-fluid"></div> 
                    </div>
                    <div class="row">
                        <a class="btn btn-secondary mt-3 mb-3" href="explore.php">Explore classes</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- JQuery -->
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