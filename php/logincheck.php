<?php
    session_start();

    if (isset($_SESSION["loggedin"])) {
        exit();
    } else {
        header("Location: ../panel/forms/login.html");
        exit();
    }
?>