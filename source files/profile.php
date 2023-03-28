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
        <section>
            <h2>
                Personal Information
            </h2>
        </section>
        <section>
            <h2>
                Booking Information
            </h2>
            <div>
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>className</th>
                        <th>date</th>
                        <th>timeslot</th>
                        <th>instructor</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    // Retrieve user data from SQL table based on email in session
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM webproject5.booking WHERE email = '$email'";
                    $result = mysqli_query($conn, $query);



                    // Display user data in table
                    while ($row = mysqli_fetch_assoc($result)) {
                        $deletequery = "DELETE FROM webproject5.booking WHERE booking_id =" . $row['booking_id'];
                        echo "<tr id='booking-" . $row['booking_id'] . "'>";
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['className'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['timeslot'] . "</td>";
                        echo "<td>" . $row['instructor'] . "</td>";
                        echo "<td><button onclick=\"updateRow('" . $row['booking_id'] . "')\">Update</button></td>";
                        echo "<td><button onclick=\"deleteRow('" . $row['booking_id'] . "')\">Delete</button></td>";
                        echo "</tr>";
                    }
                    ?>
                    <script>
                        // Function to delete booking row
                        function deleteRow(bookingId) {
                            // Send AJAX request to server to delete booking row
                            $.ajax({
                                type: "POST",
                                url: "delete_booking.php",
                                data: { booking_id: bookingId },
                                success: function(response) {
                                    // Remove deleted row from table
                                    $("#booking-" + bookingId).remove();
                                    // Show success message
                                    alert(response);
                                },
                                error: function(xhr, status, error) {
                                    // Show error message
                                    alert("Error: " + error);
                                }
                            });
                        }
                    </script>
                    </tbody>
                </table>
            </div>
        </section>


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