<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/location.css">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/location.js"></script>
    <title>SIT Active Gym Locations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
                    <h1 style="color: red;">Locations</h1>
                    <h2 class="text-white mb-4">SIT @ NYP </h2>
                    <address class="text-white mb-4">172 Ang Mo Kio Ave 8, Singapore 567739</address>
                    <div class="rowmap">
                                    <a href="https://goo.gl/maps/GTgQQDEU93pAnhkP6" class="view-map" target="_blank" rel="noreferrer">
                                        <p class="text-white">View on map</p>
                                    </a>
                                </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <!-- Picture -->
            <div class="row">
                <img src="img/gym-bg.jpg" alt="..." >
            </div>
            <!-- Information -->
            <div class="row" style= "padding-top: 5rem">
            <table>
                    <thead>
                    <tr>
                        <th>Operating Hours</th>
                        <th>Contacts</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $montofri = $sat = $sun = $email = $tel = "";
                    $success = true;

                    // Create database connection.
                    $config = parse_ini_file('../../private/db-config.ini');
                    $conn = new mysqli($config['servername'], $config['username'],
                        $config['password'], $config['dbname']);
                    
                    // Check connection
                    if ($conn->connect_error) {
                        $errorMsg = "Connection failed: " . $conn->connect_error;
                        $success = false;
                    }

                    // Retrieve user data from SQL table based on email in session
                    $query = "SELECT * FROM webproject5.locations WHERE location_id = '1'";
                    $result = mysqli_query($conn, $query);

                    // Display user data in table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td> Monday to Friday: " . $row['montofri'] . "<br> Saturday: " . $row['sat'] . "<br> Sunday: " . $row['sun']. "</td>";
                        echo "<td> <a href = 'mailto:" . $row['email'] . "'>Email: " . $row['email'] . "</a> <br> Telephone: ". $row['tel'] . "</td>";
                        echo '<td><a class="btn btn-secondary mt-3 mb-3" href="classes.php">View Classes</a></td>';
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <!-- <div class="col-sm-4 text-center">
                    <div>
                    <h3> Operating Hours</h3></div>
                    <div>
                    <p> Monday-Friday: 9:00am - 9:00pm</p></div>
                    <div>
                    <p> Saturday: 9:00am - 10:00pm</p></div>
                    <div>
                    <p> Sunday: 9:00am - 5:00pm</p></div>
                </div>

                <div class="col-sm-4 text-center">
                    <div>
                    <h3> Contact Us</h3></div>
                    <div>
                    <p> Telephone: 6543 2109</p></div>  
                    <div>
                    <a href = "mailto: sitbookingresource@gmail.com">Email: sitbookingresource@gmail.com</a></div>             
                </div>

                <div class="col-sm-4 text-center">
                    <a class="btn btn-secondary mt-3 mb-3" href="classes.php">View timetable</a>
                </div> -->

            </div>

            <div class="row" style="padding-top:5rem; padding-bottom:5rem">
                <div class="row">
                    <div>
                        <h2> Classes offered</h3></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div>
                            <h3> Yoga</h3> <img src="img/yoga.jpg" alt="..." class="img-fluid"></div> 

                        </div>
                        <div class="col-sm-4 text-center">
                            <div>
                            <h3> Zumba</h3><img src="img/zumba.jpg" alt="..." class="img-fluid"></div> 
                        </div>
                        <div class="col-sm-4 text-center">
                            <div>
                            <h3> Gym</h3><img src="img/gym.jpg" alt="..." class="img-fluid"></div> 
                    </div>
                    <div class="row">
                        <a class="btn btn-secondary mt-3 mb-3" href="explore.php">Explore classes</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- JQuery -->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <!--Bootstrap JS-->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script defer src="js/scripts.js"></script>
</body>

<?php
include "footer.inc.php";
?>

</html>