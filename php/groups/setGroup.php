<?php
    session_start();
    $_SESSION["current_group"] = $_POST["group"];
    echo "success";
?>