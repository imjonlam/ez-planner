<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO group_cars (group_name, car) VALUES (?, ?) ON DUPLICATE KEY UPDATE car = VALUES(car)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST["group"],  $_POST["car"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail"
    }

    exit(json_encode($response));
?>