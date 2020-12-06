<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO group_bnbs (group_name, bnb) VALUES (?, ?) ON DUPLICATE KEY UPDATE bnb = VALUES(bnb)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST["group"],  $_POST["bnb"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail";
    }

    exit(json_encode($response));
?>