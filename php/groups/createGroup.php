<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO groups (group_name, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_GET["group"],  $_GET["description"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail"
    }

    exit(json_encode($response));
?>