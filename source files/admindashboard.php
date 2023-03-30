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
</head>

<?php
include "nav.inc.php";
?>

<body id=test>

    <main>
        <!-- ======= Contact Section ======= -->

        <div id=test>
            <h2>Dashboard</h2>
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Manage Classes</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Manage Feedback</label>

            <section id="content1">

                <h2 class="py-3 my-3">Add Classes</h2>
                <div class="classform">
                    <form action="processBooking.php" method="POST">
                        <label for="location">Location</label>
                        <select id="location" name="location">
                            <option value="Dover">Dover</option>
                            <option value="TP">TP</option>
                            <option value="NYP">NYP</option>
                            <option value="SP">SP</option>
                            <option value="RP">RP</option>
                            <option value="NP">NP</option>
                        </select>

                        <label for="className">Choose Class</label>
                        <select id="className" name="className">
                            <option value="yoga">Yoga</option>
                            <option value="zumba">Zumba</option>
                            <option value="gym">GYM</option>
                            <option value="cycleBurn">Cycle Burn</option>
                            <option value="swimming">Swimming</option>
                        </select>

                        <label for="timeslot">Choose your Time Slot</label>
                        <select id="timeslot" name="timeslot">
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

                        <!-- <input type="submit" value="Submit"> -->
                        <a class="btn btn-secondary mt-3 mb-3" input type="submit" value="Submit">Make Changes</a>
                    </form>
                    <?php
                    $timeslot = $duration = $class = $instructor = $location = $errorMsg = "";
                    $success = true;

                    //Helper function that checks input for malicious or unwanted content.
                    function sanitize_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    // check email
                    if (empty($_POST["timeslot"])) {
                        $errorMsg .= "timeslot is required.<br>";
                        $success = false;}
                    // } else {
                    //     $timeslot = sanitize_input($_POST["email"]);
                    // }


                    // check name
                    if (empty($_POST["duration"])) {
                        $errorMsg .= "Duration is required.<br>";
                        $success = false;}
                    // } else {
                    //     $name = sanitize_input($_POST["timeslot"]);
                    // }

                    if (!empty($_POST["class"])) {
                        $errorMsg .= "Duration is required.<br>";
                        $success = false;}

                    if (!empty($_POST["instructor"])) {
                        $errorMsg .= "Duration is required.<br>";
                        $success = false;}

                    if (!empty($_POST["location"])) {
                        $errorMsg .= "location is required.<br>";
                        $success = false;}
                

                    if ($success) {
                        saveClassToDB();
                        echo "<div style= 'padding-bottom: 5rem; padding-top: 5rem'>";
                        echo "<h1 ;>Class added successfully!</h1>";
                        echo "<form action='admindashboard.php' style= 'padding-top: 10rem'><button class='btn btn-success btn-lg'>Back to Home</button></form>";
                        echo "</div>";
                    } else {
                        echo "<h1>Oops!</h1>";
                        echo "<h2>The following input errors were detected:</h2>";
                        echo "<p>" . $errorMsg . "</p>";

                        echo "<form action='admindashboard.php' method='post' ><button class='btn btn-danger btn-lg'>Return to About Us</button></form>";
                    }


                    //helper function to write the member data to the DB 
                    function saveClasstoDB()
                    {
                        global $timeslot, $duration, $class, $instructor, $location, $errorMsg;



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
                        } else {
                            $timeslot = $_POST['timeslot'];
                            $duration = $_POST['duration'];
                            $class = $_POST['className'];
                            $instructor = $_POST['instructor'];
                            $location = $_POST['location'];
                            $stmt = $conn->prepare("INSERT INTO webproject5.timetable (timeslot, duration, class, instructor, location)Values(?,?,?,?)");

                            // Bind & execute the query statement:
                            $stmt->bind_param("ssss", $timeslot, $duration, $class, $instructor, $location);
                            if (!$stmt->execute()) {
                                $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                                $success = false;
                            }
                            $stmt->close();
                        }
                        $conn->close();
                    }
                    ?>

                </div>

            </section>

            <section id="content2">
                <div class="table-wrapper">
                    <h3>View Feedback:</h3>
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Feedback</th>
                                <th>Rating</th>

                            </tr>
                        </thead>
                    </table>
                    <div class="mb-5" style="overflow-x:auto;">
                        <?php
                        $name = $email = $feedback = $errorMsg = "";
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
                            echo "<table><tr><th>name</th><th>Email</th><th>Feedback</th><th>Rating</th></tr>";
                            //output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['feedback'] . "</td>
                                <td>" . $row['rating'] . "</td>

                            </tr>";
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





</body>
<!-- <div>
        //<?php
            //include "footer.inc.php";
            //
            ?>
        <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
        <!--Bootstrap JS-->
<!-- <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
        </script>
        <script defer src="js/scripts.js"></script>
    </div> -->

</html>