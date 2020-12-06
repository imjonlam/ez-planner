<?php
    session_start();

    if (isset($_SESSION["current_group"])) {
        echo $_SESSION["current_group"];
    }
?>