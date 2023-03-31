<?php
$email = $password = $errorMsg = "";
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

//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//call function
authenticateAdmin();

function authenticateAdmin()
{
    global $email, $password, $errorMsg, $success;

    $password = sanitize_input($_POST["password"]);
    // Create database connection.
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    // Check connection,
    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        echo '<script>alert(' . $errorMsg . ')</script>';
        $success = false;
    } else {
        // Prepare the statement:
        $stmt = $conn->prepare("SELECT * FROM webproject5.admin_user WHERE email=?");

        //bind & execute the query statement:
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        // Storing user information in a session for admin
        session_name("session_admin");
        session_start();
        $_SESSION['email'] = $email;
        //$_SESSION['admin_id'] = $row["admin_id"];
        $_SESSION["logged_in"] = true;

        //check admin email and password
        if($email == $row['email'] && $password == $row['password']){

            header("Location: admindashboard.php");
        }else{
            $errorMsg = "Email not found or password doesn't match.";
            $success = false;
        }
        $stmt->close();
//            try {
//                $sql = "SELECT * FROM webproject5.adminuser WHERE email=?";
//                $result = $conn->query($sql);
//                $row = mysqli_fetch_assoc($result);
//
//                $email = sanitize_input($_POST['email']);
//                $password = $_POST['password'];
//                if ($email == $row['email'] && $password == $row['password']) {
//                    $success = 1;
//                    header("Location:admindashboard.php");
//                    exit;
//                } else {
//                    $success = 2;
//                }
//            } catch (Exception $ex) {
//                echo '<script>alert(' . $ex . ')</script>';
//            }
    }
    $conn->close();
}
?>
