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

                <div>
                    <label for="locationDropdown">Location:</label>
                    <select id="locationDropdown">
                        <option value="All">All</option>
                        <option value="Dover">Dover</option>
                        <option value="SP">SP</option>
                        <option value="NYP">NYP</option>
                        <option value="NP">NP</option>
                        <option value="TP">TP</option>
                        <option value="RP">RP</option>
                    </select>

                    <label for="classDropdown">Class:</label>
                    <select id="classDropdown">
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
            <div class="mb-5" style="overflow-x:auto;">
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