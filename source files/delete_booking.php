<?php
    // Create database connection.
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the booking ID from the AJAX request data
    $bookingId = $_POST['booking_id'];

    // Delete the booking row from the database
    $deleteQuery = "DELETE FROM webproject5.booking WHERE booking_id = $bookingId";
    if ($conn->query($deleteQuery) === TRUE) {
        // If delete was successful, return success message
        echo "Booking row deleted successfully. Please refresh the page";
    } else {
        // If delete failed, return error message
        echo "Error deleting booking row: " . $conn->error;
    }

    // Close database connection
    $conn->close();
    ?>
