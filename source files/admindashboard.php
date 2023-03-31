<?php
// Start the session
//include "includes/protect.php";
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- <script defer src="js/admin.js"></script> -->
    <title>Admin </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php
    include "nav.admin.php";
    ?>
</head>



<body id=test>

    <main>
        <!-- ======= Contact Section ======= -->

        <div>
            <h2>Dashboard</h2>
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Manage Classes</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Manage Feedback</label>
            <!-- This section has an id of "content1" -->
            <section id="content1">

                <h2 class="py-3 my-3">Add Classes</h2>
                <div class="classform">
                    <!-- This form has an action of "process_addclass.php" and a method of "POST" -->
                    <form action="process_addclass.php" method="POST">
                        <label for="location">Location</label>
                        <!-- This select element has an id of "location" and a name of "location" -->
                        <select id="location" name="location">
                            <!-- These are the options in the select element -->
                            <option value="Dover">Dover</option>
                            <option value="TP">TP</option>
                            <option value="NYP">NYP</option>
                            <option value="SP">SP</option>
                            <option value="RP">RP</option>
                            <option value="NP">NP</option>
                        </select>

                        <label for="duration">Choose your duration</label>
                        <!-- This select element has an id of "duration" and a name of "duration" -->
                        <select id="duration" name="duration">
                            <!-- These are the options in the select element -->
                            <option value="2hours">2 hours</option>

                        </select>


                        <label for="class">Choose Class</label>
                        <!-- This select element has an id of "class" and a name of "class" -->
                        <select id="class" name="class">
                            <!-- These are the options in the select element -->
                            <option value="yoga">Yoga</option>
                            <option value="zumba">Zumba</option>
                            <option value="gym">GYM</option>
                            <option value="cycleBurn">Cycle Burn</option>
                            <option value="swimming">Swimming</option>
                        </select>

                        <label for="timeslot">Choose your Time Slot</label>
                        <!-- This select element has an id of "timeslot" and a name of "timeslot" -->
                        <select id="timeslot" name="timeslot">
                            <!-- These are the options in the select element -->
                            <option value="7am">7am-9am</option>
                            <option value="10am">10am-12pm</option>
                            <option value="1pm">1pm-3pm</option>
                            <option value="4pm">4pm-5pm</option>
                            <option value="6pm">6pm-8pm</option>
                        </select>

                        <label for="instructor">Choose your instructor</label>
                        <!-- This select element has an id of "instructor" and a name of "instructor" -->
                        <select id="instructor" name="instructor">
                            <option value="leshane">Ms Leshane</option>
                            <option value="bryon">Mr Bryon</option>
                            <option value="faith">Ms Faith</option>
                            <option value="ho">Mr Ho</option>
                            <option value="jack">Mr Jack</option>
                        </select>

                        <!--<input type="submit" value="Submit">-->
                        <button class="btn btn-secondary mt-3 mb-3" type="submit" value="submit">Add Class</button>
                    </form>


                </div>

            </section>

            <section id="content2">
                <div class="table-wrapper">
                    <h3>View Feedback:</h3>

                    <div class="mb-5" style="overflow-x:auto;">
                        <?php
                        $timeslot = $duration = $class = $instructor = $location = $errorMsg = "";
                        $success = true;
                        // Create database connection.
                        $config = parse_ini_file('../../private/db-config.ini');
                        $conn = new mysqli(
                            $config['servername'],
                            $config['username'],
                            $config['password'],
                            $config['dbname']
                        );
                        // Check connection
                        if ($conn->connect_error) {
                            $errorMsg = "Connection failed: " . $conn->connect_error;
                            $success = false;
                        }
                        // Prepare the statement:
                        $sql = "SELECT name, email, feedback, rating FROM webproject5.feedback";
                        $result = $conn->query($sql);
                        // Bind & execute the query statement:
                        if ($result->num_rows > 0) {
                            echo "<table><tr><th>Name</th><th>Email</th><th>Feedback</th><th>Rating</th></tr>";
                            //output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr data-name=\"" . $row["name"] . "\" data-email=\"" . $row["email"] . "\" data-feedback=\"" . $row["feedback"]  . "\" data-rating=\"" . $row["rating"] . "\">";
                                echo "<td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["feedback"] . "</td><td>" . $row["rating"] . "</td>";
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

            </section>



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