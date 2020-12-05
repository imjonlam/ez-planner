<?php
    include '../connect.php'
    $conn = connect();

    $sql = "INSERT INTO group_bnbs (group_name, bnb) VALUES (?, ?) ON DUPLICATE KEY UPDATE bnb = VALUES(bnb)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_GET["group"],  $_GET["bnb"]);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail";
    }

    exit;
?>