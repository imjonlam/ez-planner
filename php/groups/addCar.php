<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO group_cars (group_name, car) VALUES (?, ?) ON DUPLICATE KEY UPDATE car = VALUES(car)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_GET["group"],  $_GET["car"]);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail";
    }

    exit;
?>