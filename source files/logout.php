<?php
    session_start();

    require "Util.php";
    $util = new Util();

    //Clear session
    $_SESSION["member_id"] = "";
    $_SESSION["email"] = "";
    session_destroy();

    // clear cookies
    $util->clearAuthCookie();

    header("location:index.php");

?>
