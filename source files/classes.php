<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script defer src="js/scripts.js"></script>
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
            <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
        </div>
    </section>
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

    <h2>All Available Classes</h2>
    <div style="overflow-x:auto;">
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
                <td><a class="openBtn" href="#">Zumba</label></td>
                <td>Ms Leshane</td>
                <td><a href="#booking">Book Now!</a></td>
            </tr>
            <div class="obscure">
                <div class="popup animationClose">
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
                <td>Yoga</td>
                <td>Mr Bryon</td>
                <td><a href="#booking">Book Now!</a></td>
            </tr>
            <tr>
                <td>1pm</td>
                <td>2 hours</td>
                <td>Gym</td>
                <td>Ms Faith</td>
                <td><a href="#booking">Book Now!</a></td>
            </tr>
            <tr>
                <td>4pm</td>
                <td>2 hours</td>
                <td>Cycle Burn</td>
                <td>Mr Ho</td>
                <td><a href="#booking">Book Now!</a></td>
            </tr>
            <tr>
                <td>8pm</td>
                <td>2 hours</td>
                <td>Swimming</td>
                <td>Mr Jack</td>
                <td><a href="#booking">Book Now!</a></td>
            </tr>
        </table>
    </div>


</body>
<?php
include "footer.inc.php";
?>

</html>