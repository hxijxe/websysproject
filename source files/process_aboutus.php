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
                        <h2 class="text-red mb-4">About Us</h2>
                        <p class="text-white-50">
                            Send Us a Feedback
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <main class="container">
            <?php
            $name = $email = $feedback = $errorMsg = "";
            $success = true;

// check email
            if (empty($_POST["email"])) {
                $errorMsg .= "Email is required.<br>";
                $success = false;
            } else {
                $email = sanitize_input($_POST["email"]);

// Additional check to make sure e-mail address is well-formed.
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errorMsg .= "Invalid email format.<br>";
                    $success = false;
                }
            }

// check name
            if (empty($_POST["name"])) {
                $errorMsg .= "Name is required.<br>";
                $success = false;
            } else {
                $name = sanitize_input($_POST["name"]);
            }

            if (!empty($_POST["name"])) {
                $name = sanitize_input($_POST["name"]);
            }

            if ($success)
            {
                saveFeedbackToDB();
                echo "<div style= 'padding-bottom: 5rem; padding-top: 5rem'>";
                echo "<h1 ;>feedback submitted successfully!</h1>";
                echo "<h2>Thank you for your feedback, $name</h2>";
                echo "<form action='index.php' style= 'padding-top: 10rem'><button class='btn btn-success btn-lg'>Back to Home</button></form>";
                echo "</div>";
            }   
            else
            {
                echo "<h1>Oops!</h1>";
                echo "<h2>The following input errors were detected:</h2>";
                echo "<p>" . $errorMsg . "</p>";
                    
                echo "<form action='about_us.php' method='post' ><button class='btn btn-danger btn-lg'>Return to About Us</button></form>";         
            }

//Helper function that checks input for malicious or unwanted content.
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

// Helper function to write the member data to the DB
            function saveFeedbackToDB() {
                global $name, $email, $feedback, $errorMsg, $success;
                
// Create database connection.
                $config = parse_ini_file('../../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'],
                        $config['password'], $config['dbname']);
// Check connection
                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                } else {
// Prepare the statement:
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $feedback = $_POST["feedback"];
                    $stmt = $conn->prepare("INSERT INTO webproject5.feedback (name, email, feedback) VALUES (?, ?, ?)");

// Bind & execute the query statement:
                    $stmt->bind_param("sss", $name, $email, $feedback);
                    if (!$stmt->execute()) {
                        $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                        $success = false;
                    }
                    $stmt->close();
                }
                $conn->close();
            }
            ?>

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
    </body>
</html>