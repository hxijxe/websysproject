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
                <li id="Dover">Male</li>
                <li id="SP">Female</li>
                <li id="NYP">Female</li>
                <li id="NP">Female</li>
                <li id="RP">Female</li>
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
                <td>Zumba</td>
                <td>Ms Leshane</td>
                <td><a href="#booking">Book Now!</a></td>
            </tr>
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