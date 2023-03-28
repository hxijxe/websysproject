
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
<header class="about-section text-center">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 ">
            <div class="col-lg-8" style="text-align: left;">
                <h4 style="color: red;">My Profile</h4>
                <h1 class="text-white mb-4">Keeping students fit since 2009!</h1>
            </div>
        </div>
    </div>
</header>

<main>




<?php
// delete_booking.php

if (isset($_POST['booking_id'])) {
    $booking_id = $_POST['booking_id'];

    // execute DELETE query
    $deletequery = "DELETE FROM webproject5.booking WHERE booking_id =" . $booking_id;
    // execute query here
    $deletequery->execute();
    // return response to JavaScript code
    echo "Booking deleted successfully";
} else {
    echo "Error: Booking ID not provided";
}
?>

</main>




</body>

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
