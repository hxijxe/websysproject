<?php

    session_start();
    $_SESSION["member_id"] = "";
    session_destroy();

    header("location:index.php");

?>
