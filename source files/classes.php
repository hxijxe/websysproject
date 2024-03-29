<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Classes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <h1 style="color: red;">Classes</h1>
                <h2 class="text-white mb-4">Book your class now!</h2>
            </div>
        </div>
    </div>
</header>

    <main>
<!--        fluid container for drop down-->
        <div class="container-fluid text-center">
            <div class="dropdowncontainer">
                <div class="form-group">
                    <label for="locationDropdown">Location:</label>
                    <select id="locationDropdown" onchange="filterTable()" class="form-control">
                        <option value="All">All</option>
                        <option value="Dover">Dover</option>
                        <option value="SP">SP</option>
                        <option value="NYP">NYP</option>
                        <option value="NP">NP</option>
                        <option value="TP">TP</option>
                        <option value="RP">RP</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="classDropdown">Class:</label>
                    <select id="classDropdown" onchange="filterTable()" class="form-control">
                        <option value="All">All</option>
                        <option value="YOGA">YOGA</option>
                        <option value="ZUMBA">ZUMBA</option>
                        <option value="GYM">GYM</option>
                        <option value="SPIN Class">SPIN Class</option>
                        <option value="SWIM">SWIM</option>
                    </select>
                </div>
            </div>

            <h2 class="py-3 my-3">All Available Classes</h2>
            <a class="btn btn-secondary mt-3 mb-3" href="booking.php">Book Now!</a>
            <div class="mb-5 table-responsive" style="overflow-x:auto;" tabindex="0">
                <?php
                $timeslot = $duration = $class = $instructor = $location = $errorMsg = "";
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
                // Prepare the statement:
                $sql = "SELECT timeslot, duration, class, instructor, location FROM webproject5.timetable";
                $result = $conn->query($sql);
                // Bind & execute the query statement:
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Time Slot</th><th>Duration</th><th>Class</th><th>Instructor</th><th>Location</th></tr>";
                    //output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr data-location=\"" . $row["location"] . "\" data-class=\"" . $row["class"] . "\">";
                        echo "<td>" . $row["timeslot"] . "</td><td>" . $row["duration"] . "</td><td>" . $row["class"] . "</td><td>" . $row["instructor"] . "</td><td>" . $row["location"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo '0 results';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </main>

<?php
include "footer.inc.php";
?>
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>
<!--Bootstrap JS-->
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
</script>
<script defer src="js/scripts.js"></script>
<script defer src="js/logout.js"></script>
</body>


</html>