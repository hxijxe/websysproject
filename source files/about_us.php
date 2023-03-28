<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>SIT Active Gym About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<?php
include "nav.inc.php";
?>

<body>
    <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h4 style="color: red;">About Us</h4>
                    <h1 class="text-white mb-4">Get to know us better </h1>
                </div>
            </div>
        </div>
    </header>

    <section class="text-center about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-red mb-4">Our Story</h2>
                    <p class="text-black-50">
                    Since our humble beginnings in 2023, we have become one of the largest fitness brands in the world, 
                    and the largest in Asia. A trusted and enduring brand, we have an unrivalled network in the region, 
                    with knowledgeable teams, new technology and world class clubs. Through the years, we’ve seen a lot of changes and 
                    we’ve come a long way. But our purpose remains clear: we are the fitness leaders who inspire people to go further in life.

                    With more than 2,000 members around the region, we’re always looking for new ways 
                    to support and inspire them – and not just in the gym.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center about">
        <div class="container px-5 px-lg-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                    <div class="text-center card-header">
                        <img src="img/sitdover.jpg" class="card-img-top" alt="..." style="background-size: cover; height: 200px;">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Locate Us</h>
                        <h5 class="card-text text-dark ">6 Locations across Singapore</h5>
                    </div>
                    <div class="text-center card-footer">
                        <a class="btn btn-secondary mt-3 mb-3" href="location.php">Find Out More</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <div class="text-center card-header">
                            <img src="img/zumba.jpg" class="card-img-top" alt="..." style="background-size: cover; height: 200px;">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Explore Classes</h3>
                            <h5 class="card-text text-dark">Check out the classes that we provide</h5>
                        </div>
                        <div class="text-center card-footer">
                            <a class="btn btn-secondary mt-3 mb-3" href="explore.php">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center card-header">
                            <img src="img/gym-bg.jpg" class="card-img-top" alt="..." style="background-size: cover;height: 200px;">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Sign Up with Us</h3>
                            <h5 class="card-text text-dark ">Kickstart your fitness Journey now</h5>
                        </div>
                        <div class="text-center card-footer">
                            <a class="btn btn-secondary mt-3 mb-3" href="login_signup.php">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="askaqns">
            <h3>Ask Us a Question</h3>
            <form action="processquestion.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Your email...">

                <label for="question">Question</label>
                <textarea id="question" name="question" requireed placeholder ="Your question..."></textarea>
                

                <input type="submit" value="Submit">
                
            </form>
        </div>
    </section>


<?php
include "footer.inc.php";
?>
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>
<!--Bootstrap JS-->
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
</script>
<script defer src="js/scripts.js"></script>
</html>