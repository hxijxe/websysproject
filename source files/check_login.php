<?php
session_start();

if (isset($_SESSION['member_id'])) {
    // User is logged in
    echo "true";
} else {
    // User is not logged in
    echo "false";
}
?>
