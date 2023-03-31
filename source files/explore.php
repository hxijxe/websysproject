<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/locationtest.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Locations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <h1 style="color: red;">Explore</h1>
                <h2 class="text-white mb-4">Find out more about activities here!</h2>
            </div>
        </div>
    </div>
</header>

<main class="container">
    <div class='main-container'>
        <div class='grid-container'>
            <div class='card card--featured'>
                <div class='card__side-by-side--m'>
                    <div class='card__image'>
                        <img src='img/yoga.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="new campus">
                    </div>
                    <div class='card__content padding-large--l' style="width:100%">
                        <h2>Yoga</h2>
                        <p><a href="classes.php">Book Now!</a></p>
                        <p>Yoga is a practice that originated in
                            ancient India and focuses on
                            physical, mental, and spiritual well-being.
                            It involves various physical postures,
                            breathing techniques, meditation, and relaxation. .</p>
                        <p><button class="btn btn-secondary mt-3 mb-3" id="myBtnYoga">Learn More!</button></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- The Modal -->
        <div id="myModalYoga" class="exploremodal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="closeYoga" >&times;</span>
                    <h2>Yoga</h2>
                </div>
                <div class="modal-body">
                    <iframe id="video" class="responsive-iframe" src="https://www.youtube.com/embed/v7AYKMP6rOE">
                    </iframe>
                    <p>Yoga is a practice that combines physical movement, breath control, and meditation to promote physical, mental, and spiritual health.
                        To start, find a quiet space where you can comfortably move and sit.
                        Begin with simple poses like child's pose, downward dog, and mountain pose.</p>
                </div>
                <div class="modal-footer">
                    <h3>Modal Footer</h3>
                </div>
            </div>

        </div>

        <div class='grid-container'>
            <div class='card card--featured'>
                <div class='card__side-by-side--m'>
                    <div class='card__image'>
                        <img src='img/zumba.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit nyp">
                    </div>
                    <div class='card__content padding-large--l' style="width:100%">
                        <h2>Zumba</h2>
                        <p><a href="classes.php">Book Now!</a></p>
                        <p>Zumba has many advantages for physical and mental health.
                            It is a fun and high-energy workout that can improve cardiovascular health, muscle tone, and endurance.</p>
                        <p><a class="btn btn-secondary mt-3 mb-3" href='https://www.youtube.com/watch?v=mZeFvX3ALKY' target="_blank">Learn More!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class='grid-container'>
            <div class='card card--featured'>
                <div class='card__side-by-side--m'>
                    <div class='card__image'>
                        <img src='img/gym.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit tp">
                    </div>
                    <div class='card__content padding-large--l' style="width:100%">
                        <h2>Gym</h2>
                        <p><a href="classes.php">Book Now!</a></p>
                        <p>Weight training has numerous benefits for overall health and fitness.
                            It helps to increase muscle mass, improve bone density, and boost metabolism.</p>
                        <p><a class="btn btn-secondary mt-3 mb-3" href='https://www.youtube.com/watch?v=zxDqvJoaR2c' target="_blank">Learn More!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class='grid-container'>
            <div class='card card--featured'>
                <div class='card__side-by-side--m'>
                    <div class='card__image'>
                        <img src='img/cycle.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit dover">
                    </div>
                    <div class='card__content padding-large--l' style="width:100%">
                        <h2>Cycle Burn</h2>
                        <p><a href="classes.php">Book Now!</a></p>
                        <p>Spin classes offer a variety of benefits for physical and mental health.
                            They provide a low-impact cardiovascular workout that can improve endurance, burn calories,
                            and increase lung capacity.</p>
                        <p><a class="btn btn-secondary mt-3 mb-3" href='https://www.youtube.com/watch?v=CsF-bpdNJvA' target="_blank">Learn More!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class='grid-container'>
            <div class='card card--featured'>
                <div class='card__side-by-side--m'>
                    <div class='card__image'>
                        <img src='img/swim.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260' alt="sit rp">
                    </div>
                    <div class='card__content padding-large--l' style="width:100%">
                        <h2>Swim</h2>
                        <p><a href="classes.php">Book Now!</a></p>
                        <p>Swimming is a low-impact exercise that offers a wide range of physical and mental health benefits.
                            It can improve cardiovascular health, build strength and endurance, and reduce the risk of chronic diseases.</p>
                        <p><a class="btn btn-secondary mt-3 mb-3" href='https://www.youtube.com/watch?v=NFtknwZZh5o' target="_blank">Learn More!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!--jQuery-->
<script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
</script>
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