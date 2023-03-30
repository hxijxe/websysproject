<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // User is logged in
    echo "true";
} else {
    // User is not logged in
    echo "false";
}
?>
