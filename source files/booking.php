<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
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
    <section>
        <div class="bookingform">
            <h3>Classes Booking</h3>
            <form action="processBooking.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Your email...">

                <label for="className">Choose your Class</label>
                <select id="className" name="className">
                    <option value="yoga">Yoga</option>
                    <option value="zumba">Zumba</option>
                    <option value="gym">GYM</option>
                    <option value="cycleBurn">Cycle Burn</option>
                    <option value="swimming">Swimming</option>
                </select>

                <label for="date">Choose a Date</label>
                <input type="date" id="date" name="date" >

                <label for="timeSlot">Choose your Time Slot</label>
                <select id="timeSlot" name="timeSlot">
                    <option value="7am-9am">7am-9am</option>
                    <option value="10am-12pm">10am-12pm</option>
                    <option value="1pm-3pm">1pm-3pm</option>
                    <option value="4pm-5pm">4pm-5pm</option>
                    <option value="6pm-8pm">6pm-8pm</option>
                </select>

                <label for="instructor">Choose your instructor</label>
                <select id="instructor" name="instructor">
                    <option value="leshane">Ms Leshane</option>
                    <option value="bryon">Mr Bryon</option>
                    <option value="faith">Ms Faith</option>
                    <option value="ho">Mr Ho</option>
                    <option value="jack">Mr Jack</option>
                </select>

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
</body>


</html>