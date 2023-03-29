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
<?php
// Initialize variables
$fname = $lname = $tier = $errorMsg = "";
$success = true;

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $member_id = $_POST["member_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $tier = $_POST["tier"];

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
    if (empty($_POST["lname"])) {
        $errorMsg .= "Name is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_input($_POST["lname"]);
    }

    if (!empty($_POST["fname"])) {
        $fname = sanitize_input($_POST["fname"]);
    }
    if (empty($_POST["tier"])) {
        $errorMsg .= "tier is required.<br>";
        $success = false;
    }else {
        $tier = sanitize_input($_POST["tier"]);
    }

    // Create database connection
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    // Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        // Update member data in SQL table
        $query = "UPDATE webproject5.members SET fname='$fname', lname='$lname', email='$email', tier='$tier' WHERE member_id='$member_id'";
        if (mysqli_query($conn, $query)) {
            $errorMsg = "Member data updated successfully";
            echo "<script>alert('$errorMsg'); window.location.href='profile.php';</script>";
        } else {
            $errorMsg = "Error updating member data: " . mysqli_error($conn);
            $success = false;
        }
    }
} else {
    // Get member ID from query string
    $member_id = $_GET["member_id"];

    // Retrieve member data from SQL table
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    $query = "SELECT * FROM webproject5.members WHERE member_id = '$member_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Set input values to current member data
    $fname = $row["fname"];
    $lname = $row["lname"];
    $email = $row["email"];
    $tier = $row["tier"];
}
?>
<?php
// Display error message if there was an issue updating the member data
if (!$success) {
    echo "<p>Error: $errorMsg</p>";
}
?>
<div class="bookingform">
    <h2>Update Member</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="member_id" value="<?php echo $member_id; ?>">
    <label for="fname">First Name:</label>
    <input type="text" name="fname" value="<?php echo $fname; ?>"><br>
    <label for="lname">Last Name:</label>
    <input type="text" name="lname" value="<?php echo $lname; ?>"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $email; ?>"><br>

    <label for="tier">Tier:</label>
    <input class="big" type="radio" id="basic" name="tier" value="Basic" />
    <label for="basic">Basic</label>

    <input class="big" type="radio" id="silver" name="tier" value="Silver" />
    <label for="silver">Silver</label>

    <input class="big" type="radio" id="gold" name="tier" value="Gold" />
    <label for="gold">Gold</label>

    <input type="submit" value="Update">

</form>
</div>
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
</body>


</html>