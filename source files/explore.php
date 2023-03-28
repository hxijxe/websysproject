<!DOCTYPE html>
<html lang="en-GB">

    <head>
        <link rel="stylesheet" href="css/styles.css">
        <title>SIT Active Gym Classes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <?php
    include "nav.inc.php";
    ?>

    <body>
        <section class="about-section text-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Let's move together</h2>
                        <p class="text-white-50">
                            SIT Gym offers a unique approach to health and fitness.
                            Our exercise experiences are thoughtfully designed to incorporate intelligent programming and enjoyable movements,
                            resulting in a harmonious blend of both. Our offerings are diverse, ranging from yoga to HIIT,
                            giving you the freedom to move your body in the way that suits you best.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="card">
            <div class="w3-container">


                <div class="w3-card-4" style="width:80%">
                    <h2>Yoga</h2>
                    <img src="img/yoga.jpg" alt="yoga" style="width:100%">
                    <div class="w3-container w3-center">
                        <p>Yoga is a practice that originated in 
                            ancient India and focuses on 
                            physical, mental, and spiritual well-being.
                            It involves various physical postures, 
                            breathing techniques, meditation, and relaxation. 
                            Regular practice of yoga can improve flexibility,
                            strength, balance, reduce stress and anxiety, 
                            and promote overall health and wellness.</p>
                        <p><a href="/source files/classes.php">Book Now!</a></p>
                        <p><button class="myBtn" id="myBtn">Learn More!</button></p>
                    </div>
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close" >&times;</span>
                            <h2>Yoga</h2>
                        </div>
                        <div class="modal-body">
                            <iframe id="video" class="responsive-iframe" src="https://www.youtube.com/embed/v7AYKMP6rOE">
                        </iframe>
                            <p>Yoga is a practice that combines physical movement, breath control, and meditation to promote physical, mental, and spiritual health.
                            To start, find a quiet space where you can comfortably move and sit.
                            Begin with simple poses like child's pose, downward dog, and mountain pose.
                            As you progress, explore different types of yoga such as hatha, vinyasa, and restorative.
                            Remember to breathe deeply and listen to your body.
                            With regular practice, yoga can improve flexibility, strength, and balance, as well as reduce stress and anxiety.</p>
                        </div>
                        <div class="modal-footer">
                            <h3>Modal Footer</h3>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w3-container">


                <div class="w3-card-4" style="width:80%">
                    <h2>Zumba</h2>
                    <img src="img/zumba.jpg" alt="zumba" style="width:100%">
                    <div class="w3-container w3-center">
                        <p>Zumba has many advantages for physical and mental health. 
                            It is a fun and high-energy workout that can improve cardiovascular health, muscle tone, and endurance. 
                            It also helps to burn calories and reduce stress, anxiety, and depression. 
                            Zumba classes provide a social atmosphere that can increase motivation and make exercise more enjoyable.</p>
                        <p><a href="/source files/classes.php">Book Now!</a></p>
                        
                    </div>
                </div>
               
            </div>

            <div class="w3-container">


                <div class="w3-card-4" style="width:80%">
                    <h2>Gym</h2>
                    <img src="img/gym.jpg" alt="gym" style="width:100%">
                    <div class="w3-container w3-center">
                        <p>Weight training has numerous benefits for overall health and fitness. 
                            It helps to increase muscle mass, improve bone density, and boost metabolism.
                            Weight training can also enhance athletic performance, reduce the risk of injury, 
                            and improve body composition by reducing body fat and increasing lean muscle tissue. 
                            Additionally, weight training can improve mental health by reducing stress and anxiety.</p>
                        <p><a href="/source files/classes.php">Book Now!</a></p>
                    </div>
                </div>
            </div>

            <div class="w3-container">


                <div class="w3-card-4" style="width:80%">
                    <img src="img/cycle.jpg" alt="cycle" style="width:100%">
                    <h2>Cycle Burn</h2>
                    <div class="w3-container w3-center">
                        <p>Spin classes offer a variety of benefits for physical and mental health. 
                            They provide a low-impact cardiovascular workout that can improve endurance, burn calories, 
                            and increase lung capacity. Spin classes also help to strengthen leg muscles, improve balance and coordination, 
                            and reduce the risk of injury. 
                            They provide a fun and social atmosphere that can increase motivation and reduce stress.</p>
                        <p><a href="/source files/classes.php">Book Now!</a></p>
                    </div>
                </div>
            </div>

            <div class="w3-container">


                <div class="w3-card-4" style="width:80%">
                    <h2>Swimming</h2>
                    <img src="img/swim.jpg" alt="swimming" style="width:100%">
                    <div class="w3-container w3-center">
                        <p>Swimming is a low-impact exercise that offers a wide range of physical and mental health benefits. 
                            It can improve cardiovascular health, build strength and endurance, and reduce the risk of chronic diseases. 
                            Swimming is also a great stress-reliever, promoting relaxation and reducing anxiety. 
                            Additionally, it is a great exercise option for people of all ages and fitness levels.</p>
                        <p><a href="/source files/classes.php">Book Now!</a></p>

                    </div>
                </div>
            </div>


        </section>



    </body>

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
    <script defer src="js/scripts.js"></script>
</html>