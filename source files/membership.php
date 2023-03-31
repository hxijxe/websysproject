<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                    <h1 style="color: red;">Membership</h1>
                    <h2 class="text-white mb-4">3 Tiers to choose from </h2>
                </div>
            </div>
        </div>

    </header>

    <main>
        <section class="projects-section bg-body" id="projects">
            <div class="container px-5 px-lg-5">
                <div class="pricing-header px-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h2 class="display-4">Pricing</h2>
                    <p class="lead">Select the perfect gym membership plan to meet your fitness goals and budget. Our plans are
                    designed to offer you flexibility and variety, so you can get the most out of your workouts.</p>
                </div>
                <div class="card-deck mb-3 text-center row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                                <h3 class="my-0 font-weight-normal">Basic Tier</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title pricing-card-title">$12 <small class="text-muted">/ mo</small>
                                </h2>
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
                                <h3 class="my-0 font-weight-normal">Silver Tier</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title pricing-card-title">$18 <small class="text-muted">/ mo</small>
                                </h2>
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
                                <h3 class="my-0 font-weight-normal">Gold Tier</h3>
                            </div>
                            <div class="card-body">
                                <h2 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small>
                                </h2>
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
            </div>
        </section>

        <div class="container px-5 px-lg-5">
            <div class="row">
                <div class="text-center card-body" style=" border-bottom: 1px solid; padding-bottom: 10px">
                    <h2>MEMBERSHIP FEATURES</h2>
                </div>
            </div>
            <div class="row text-center py-5">
                <div class="col-md-4">
                    <i class="bi bi-currency-dollar"></i>
                    <h3>No joining fee</h3>
                    <p>We offer a wide range of classes to suit all fitness levels and
                        interests, including yoga, Pilates, cycling, and more.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Multiple locations</h3>
                    <p>Our gyms are conveniently located in various areas, so you can
                        workout wherever is most convenient for you.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-collection-play-fill"></i>
                    <h3>Variety of classes</h3>
                    <p>We offer a wide range of classes to suit all fitness levels and
                        interests, including yoga, Pilates, cycling, and more.</p>
                </div>
            </div>
            <div class="row text-center py-3">
                <div class="col-md-6 px-5">
                    <i class="bi bi-discord"></i>
                    <h3>Fitness facilities</h3>
                    <p>Our gyms are fully equipped with state-of-the-art cardio and
                        strength training equipment, as well as functional training areas.</p>
                </div>
                <div class="col-md-6 px-5">
                    <i class="bi bi-person-square"></i>
                    <h3>Additional services</h3>
                    <p>We offer a range of additional services, including personal
                        training, nutrition coaching, and more, to help you achieve your fitness goals.</p>
                </div>
            </div>
        </div>

        <div class="container px-5 px-lg-5" style="padding-top: 5rem ; padding-bottom: 5rem;">
            <h2 style="padding-bottom: 2rem">Frequently Asked Questions</h2>
            <div class="col-lg-12 col-12 g-0">
                <h3> What do I have to bring for my workout? </h3>
                <p> Do bring a towel for hygiene purposes. Show up in outfit that is appropriate for physical fitness.
                    Consider bringing a change of clothes as well, we do have shower facilities!
                </p>
                <h3> What is the eligibility for membership? </h3>
                <p> You have to be one of the following: A SIT student, staff, or alumni.

                </p>
                <h3> Can I patron more than one location? </h3>
                <p> Yes, you can visit any of our 6 locations if you are a member!
                </p>
                <h3> Does becoming a member allow me to get better grades in school? </h3>
                <p> We cannot guarantee that your grades will improve. However, it is proven that
                    exercising helps to destress and this may help you to focus in your studies!
                </p>
                <h3> What are your hours of operation? </h3>
                <p> Our gym is open from 6am to 10pm, Monday to Sunday. </p>
                <h3> Do you offer personal training sessions? </h3>
                <p> Yes, we offer personal training sessions with certified trainers. You can sign up for these sessions
                    at our front desk. </p>
                <h3> Are there any additional fees or charges? </h3>
                <p> No, there are no additional fees or charges for our gym membership. </p>
                <h3> What types of equipment do you have available? </h3>
                <p> We have a wide range of equipment available, including cardio machines, weight machines, and free
                    weights. </p>
                <h3> Do you offer group fitness classes? </h3>
                <p> Yes, we offer a variety of group fitness classes including yoga, Zumba, and spinning. Check our
                    schedule for the full list of classes and times. </p>
                <h3> Can I put my membership on hold? </h3>
                <p> Yes, you can put your membership on hold for up to 3 months with prior notice. </p>
                <h3> What is your cancellation policy? </h3>
                <p> We require 30 days written notice to cancel your membership. </p>
            </div>
        </div>

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
    <script defer src="js/logout.js"></script>
</body>

</html>