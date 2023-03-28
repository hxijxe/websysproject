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
<header class="about-section text-center">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 ">
            <div class="col-lg-8" style="text-align: left;">
                <h4 style="color: red;">Membership</h4>
                <h1 class="text-white mb-4">3 Tiers to choose from </h1>
            </div>
        </div>
    </div>

</header>

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
                                <p class="card-text">Basic Tier is recommended for beginners who wish to start their fitness journey at a slower pace. Maximum 1 class per week.</p>
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
                                <p class="card-text">Silver Tier is recommended for amateurs who wish to commit more time to their physical well-being. Maximum 3 classes per week. </p>

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
                                <p class="card-text">Gold Tier is recommended for fitness junkies who exercise on a daily basis or even twice a day. Unlimited classes per week.</p>
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
                        <h3>Multiple Locations</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <h3>Variety of Classes</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5 px-lg-5" style = "padding-top: 5rem; padding-bottom:2rem">
            <h1 style = "padding-bottom: 2rem">Frequently Asked Questions</h1>
            <div class ="col-lg-12 col-12 g-0">
                <h4> What do I have to bring for my workout? </h4>
                <p> Do bring a towel for hygiene purposes. Show up in outfit that is appropriate for physical fitness. 
                    Consider bringing a change of clothes as well, we do have shower facilities! 
                </p>
                <h4> What is the eligibility for membership? </h4>
                <p> You have to be one of the following: A SIT student, staff, or alumni. 

                </p>
                <h4> Can I patron more than one location?  </h4>
                <p> Yes, you can visit any of our 6 locations if you are a member!
                </p>
                <h4> Does becoming a member allow me to get better grades in school? </h4>
                <p> We cannot guarantee that your grades will improve. However, it is proven that
                    exercising helps to destress and this may help you to focus in your studies!
                </p>
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