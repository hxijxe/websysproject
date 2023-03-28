<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include 'protect.php'?>
</head>

<?php
include "nav.inc.php";
?>

<body>
    <section class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Classes</h2>
                    <p class="text-white-50">
                        Book your class shift now!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container text-center">
        <div class="dropdowncontainer">

            <div class="dropdown">
                <div class="select">
                    <span>Select Location</span>
                    <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="location">
                <ul class="dropdown-menu">
                    <li id="Dover">Dover</li>
                    <li id="SP">SP</li>
                    <li id="NYP">NYP</li>
                    <li id="NP">NP</li>
                    <li id="RP">RP</li>
                </ul>
            </div>

            <div class="dropdown">
                <div class="select">
                    <span>Select Classes</span>
                    <i class="fa fa-chevron-left"></i>
                </div>
                <input type="hidden" name="location">
                <ul class="dropdown-menu">
                    <li id="Dover">Yoga</li>
                    <li id="SP">Zumba</li>
                    <li id="NYP">Gym</li>
                    <li id="NP">Cycle Burn</li>
                    <li id="RP">Swimming</li>
                </ul>
            </div>
        </div>

        <h2 class="py-3 my-3">All Available Classes</h2>
        <div class="mb-5" style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Time Slot</th>
                    <th>Duration</th>
                    <th>Class</th>
                    <th>Instructor</th>
                    <th>Booking</th>
                </tr>
                <tr>
                    <td>7am</td>
                    <td>2 hours</td>
                    <td><a class="zumbaopenBtn" href="#">Zumba</label></td>
                    <td>Ms Leshane</td>
                    <td><a href="booking.php">Book Now!</a></td>
                </tr>
                <div class="zumbaobscure">
                    <div class="zumbapopup ZanimationClose">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/mZeFvX3ALKY">
                        </iframe>
                        <p>To begin a Zumba tutorial, you'll need some upbeat music and comfortable clothing.
                            Start with a warm-up consisting of light cardio moves like jumping jacks or jogging in place.
                            Then, move on to learning the basic steps of different dance styles like salsa, merengue, and reggaeton.
                            Once you've mastered the basics, add in more complicated routines that combine different dance styles.
                            Remember to stay hydrated and take breaks when needed, and have fun dancing to the music!</p>
                        <a class="closeBtn" href="#">Close</a>
                    </div>
                </div>

                <tr>
                    <td>10am</td>
                    <td>2 hours</td>
                    <td><a class="yogaopenBtn" href="#">Yoga</label></td>
                    <td>Mr Bryon</td>
                    <td><a href="booking.php">Book Now!</a></td>
                </tr>
                <div class="yogaobscure">
                    <div class="yogapopup YanimationClose">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/v7AYKMP6rOE">
                        </iframe>
                        <p>Yoga is a practice that combines physical movement, breath control, and meditation to promote physical, mental, and spiritual health.
                            To start, find a quiet space where you can comfortably move and sit.
                            Begin with simple poses like child's pose, downward dog, and mountain pose.
                            As you progress, explore different types of yoga such as hatha, vinyasa, and restorative.
                            Remember to breathe deeply and listen to your body.
                            With regular practice, yoga can improve flexibility, strength, and balance, as well as reduce stress and anxiety.</p>
                        <a class="closeBtn" href="#">Close</a>
                    </div>
                </div>


                <tr>
                    <td>1pm</td>
                    <td>2 hours</td>
                    <td><a class="gymopenBtn" href="#">Gym</label></td>
                    <td>Ms Faith</td>
                    <td><a href="booking.php">Book Now!</a></td>
                </tr>
                <div class="gymobscure">
                    <div class="gympopup GanimationClose">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/zcTBdZcmUp0">
                        </iframe>
                        <p>Weight lifting is a popular form of exercise that involves lifting weights to build strength, muscle mass, and endurance. Before starting,
                            it's important to warm up and stretch to avoid injury. Begin with light weights and gradually increase the weight and intensity over time.
                            Focus on proper form and technique to ensure safety and effectiveness. Aim to work all major muscle groups, including chest, back, legs, and core.
                            Rest days are crucial to allow for muscle recovery and growth. With consistency and dedication,
                            weight lifting can lead to improved physical fitness and overall health.</p>
                        <a class="closeBtn" href="#">Close</a>
                    </div>
                </div>

                <tr>
                    <td>4pm</td>
                    <td>2 hours</td>
                    <td><a class="CopenBtn" href="#">Spin Class</label></td>
                    <td>Mr Ho</td>
                    <td><a href="booking.php">Book Now!</a></td>
                </tr>
                <div class="Cobscure">
                    <div class="Cpopup CanimationClose">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4Hl1WAGKjMc">
                        </iframe>
                        <p>Spin class is a high-intensity cardio workout that takes place on stationary bikes in a group setting.
                            To start, adjust the bike seat and handlebars to fit your body.
                            Follow the instructor's cues to pedal at varying speeds and resistances, and incorporate standing and seated positions for maximum intensity.
                            Bring a water bottle and towel to stay hydrated and wipe away sweat.
                            Spin class can improve cardiovascular health, build endurance, and burn calories.
                            Remember to listen to your body and adjust the resistance and intensity as needed.</p>
                        <a class="closeBtn" href="#">Close</a>
                    </div>
                </div>

                <tr>
                    <td>6pm</td>
                    <td>2 hours</td>
                    <td><a class="SopenBtn" href="#">Swim</label></td>
                    <td>Mr Jack</td>
                    <td><a href="booking.php">Book Now!</a></td>
                </tr>
                <div class="Sobscure">
                    <div class="Spopup SanimationClose">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/uiI6Z_0Q2Io">
                        </iframe>
                        <p>Swimming is a great low-impact exercise that works the entire body.
                            Start by finding a pool and wearing appropriate swimwear.
                            Warm up with a few laps of easy swimming before moving on to drills that focus on technique and form.
                            Common strokes include freestyle, backstroke, breaststroke, and butterfly.
                            Remember to breathe rhythmically and maintain proper body alignment. Swimming can improve cardiovascular health, build muscle strength, and reduce stress.
                            With regular practice, you can become a more efficient and confident swimmer.</p>
                        <a class="closeBtn" href="#">Close</a>
                    </div>
                </div>

            </table>
        </div>
    </div>
    <?php
    include "footer.inc.php";
    ?>
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <!--Bootstrap JS-->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script defer src="js/scripts.js"></script>
</body>


</html>