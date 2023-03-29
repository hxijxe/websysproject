<?php
// Start the session
include "includes/authenticate.inc.php";
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

</body>
<?php
include "nav.inc.php";
?>

<body id=test>


    <main>
        <!-- ======= Contact Section ======= -->

        <?php
        if (isset($_POST["accept"])) {

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
                echo '<script>alert(' . $errorMsg . ')</script>';
            } else {
                // Prepare the statement:
                try {
                    $sql = "UPDATE bookings SET bkStatus=\"accepted\" WHERE bookingID=" . $_POST['bookingID'] . ";";
                    $result = $conn->query($sql);
                    echo '<script>alert("Accepted booking by ' . $_POST['name'] . ' on ' . $_POST['date'] . ' for ' . $_POST['pax'] . ' pax")</script>';
                    sendMail("accepted", $_POST['email'], $_POST['name'], $_POST['date'], $_POST['pax']);
                } catch (Exception $ex) {
                    echo '<script>alert(' . $ex . ')</script>';
                }
            }
            $conn->close();
        } else if (isset($_POST["reject"])) {
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
                echo '<script>alert(' . $errorMsg . ')</script>';
            } else {
                // Prepare the statement:
                try {
                    $sql = "UPDATE bookings SET bkStatus=\"rejected\" WHERE bookingID=" . $_POST['bookingID'] . ";";
                    $result = $conn->query($sql);
                    echo '<script>alert("Rejected booking by ' . $_POST['name'] . ' on ' . $_POST['date'] . ' for ' . $_POST['pax'] . ' pax")</script>';
                    sendMail("declined", $_POST['email'], $_POST['name'], $_POST['date'], $_POST['pax']);
                } catch (Exception $ex) {
                    echo '<script>alert(' . $ex . ')</script>';
                }
            }
            $conn->close();
        }


        function retrieveDB()
        {
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
                echo '<script>alert(' . $errorMsg . ')</script>';
            } else {

                // Prepare the statement:
                try {

                    $sql = "SELECT * FROM bookings WHERE bkStatus='pending'";
                    $result = $conn->query($sql);

                    $blogs = array();

                    while ($row = $result->fetch_assoc()) {
                        $blogs[] = $row['Blog_Contents'];
                    };

                    $max = sizeof($blogs);
                    //echo '<script>alert(' . $max . ')</script>';
                    $count = 0;

                    $result = $conn->query($sql);
                    if ($max != 0) {
                        while ($row = $result->fetch_assoc()) {
                            //echo '<script>alert(' . $max . ')</script>';
                            // echo '<script>alert(' . $count . ')</script>';
                            //echo "Name: " . $row["bkName"] . "<br>";

                            if (($count + 2) % 2 == 0) {
                                echo "<div style=\"background:bisque; padding: 10px 10px 20px;\">";
                            } else {
                                echo "<div style=\"background:white; padding: 10px 10px 20px;\">";
                            }
                            echo "<h3><b>Booking Type:</b> " . $row["bookingType"] . "</h3>" .
                                "<b><p>Date:</b> " . $row["reserveDate"] . "</p>";
                            if ($row["bookingType"] == "normal") {
                                echo "<b><p>Time:</b> " . $row["timeslot"] . "</p>";
                            } else {
                                echo "<p>Event Type:</b> " . $row["eventType"] . "</p>";
                            }
                            echo "<b><p>Name:</b> " . $row["bkName"] . "</p>";
                            echo "<b><p>Pax:</b> " . $row["pax"] . "</p>" .
                                "<b><p>EMail:</b> " . $row["bkEmail"] . "</p>";
                            "<b><p>Phone:</b> " . $row["phoneNo"] . "</p>";
                            //need css to look like btn
                            //"<p id=\"bbtn\" name=\"".$row["bookingID"]."\"class=\"acceptBtn\">Accept</p>" .
                            //"<p id=\"bbtn\" class=\"rejectBtn\">Decline</p></div>";

                            echo "<div class=\"formd\"><form class=\"formd\" action=\"\" method=\"post\" name=\"accept\">" .
                                "<input type=\"hidden\" name=\"bookingID\" id=\"bookingID\" value= " . $row["bookingID"] . ">" .
                                "<input type=\"hidden\" name=\"name\" id=\"name\" value= " . $row["bkName"] . ">" .
                                "<input type=\"hidden\" name=\"date\" id=\"date\" value= " . $row["reserveDate"] . ">" .
                                "<input type=\"hidden\" name=\"pax\" id=\"pax\" value= " . $row["pax"] . ">" .
                                "<input type=\"hidden\" name=\"email\" id=\"email\" value= " . $row["bkEmail"] . ">" .
                                "<button class=\"bbtn\" type=\"submit\" name=\"accept\">Accept</button></form>";

                            echo "<form class=\"formd\" action=\"\" method=\"post\" name=\"reject\">" .
                                "<input type=\"hidden\" name=\"bookingID\" id=\"bookingID\" value= " . $row["bookingID"] . ">" .
                                "<input type=\"hidden\" name=\"name\" id=\"name\" value= " . $row["bkName"] . ">" .
                                "<input type=\"hidden\" name=\"date\" id=\"date\" value= " . $row["reserveDate"] . ">" .
                                "<input type=\"hidden\" name=\"pax\" id=\"pax\" value= " . $row["pax"] . ">" .
                                "<input type=\"hidden\" name=\"email\" id=\"email\" value= " . $row["bkEmail"] . ">" .
                                "<button class=\"bbtn\" type=\"submit\" name=\"reject\">Reject</button></form></div></div>";


                            $count += 1;
                        }
                    } else {
                        echo "No incoming bookings";
                    }
                } catch (Exception $ex) {
                    echo '<script>alert(' . $ex . ')</script>';
                }
            }
            $conn->close();
        }
        ?>

        <div id=test>
            <h2>Manage bookings</h2>
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Pending Bookings</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Accepted Bookings</label>
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Past Bookings</label>

            <section id="content1">
                <?php
                retrieveDB();
                ?>


            </section>
            <section id="content2">
                <h3>Something</h3>
                <p>Aliquam condimentum hendrerit nisi, nec vestibulum mi feugiat ut. Donec lobortis nisi neque, in egestas eros venenatis eu. Vestibulum nulla nisi, venenatis at pretium id, fermentum quis risus. Quisque porta suscipit neque eu placerat. Etiam scelerisque, quam in sodales iaculis, velit velit mattis nunc, quis dapibus massa elit nec enim. Vivamus quis libero aliquam, volutpat nisl sed, consectetur ante. Donec aliquam semper felis, in placerat leo blandit in. Integer interdum elit quis felis tempor venenatis. In faucibus ac mauris id commodo. Proin in sapien tincidunt, luctus mi id, bibendum dui. Nunc tincidunt libero ut purus vehicula, sit amet tincidunt mi sollicitudin. Donec varius erat magna, sed convallis purus adipiscing ut. Duis sagittis ut leo ut auctor. Ut convallis nisl nec purus sollicitudin, nec iaculis felis rutrum. </p>
            </section>
            <section id="content3">
                <h3>Heading Text</h3>
                <p>Fusce pulvinar porttitor dui, eget ultrices nulla tincidunt vel. Suspendisse faucibus lacinia tellus, et viverra ligula. Suspendisse eget ipsum auctor, congue metus vel, dictum erat. Aenean tristique euismod molestie. Nulla rutrum accumsan nisl, ac semper sapien tincidunt et. Praesent tortor risus, commodo et sagittis nec, aliquam quis augue. Aenean non elit elementum, tempor metus at, aliquam felis.</p>
            </section>

        </div>
    </main>

    <script>
        // button to accept
        // var buttons = document.getElementsByClassName('acceptBtn');
        // for (var i = 0; i < buttons.length; i++) {
        //     (function (index) {
        //         buttons[index].onclick = function () {
        //             //update db
        //             alert("I am button " +  buttons[index].getAttribute('name'));
        //         };
        //     })(i)
        // }
    </script>
    <?php
    include "includes/footer.inc.php";
    ?>
</body>


</html>