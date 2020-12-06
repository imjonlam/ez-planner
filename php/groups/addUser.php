<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO group_members (group_name, user) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_GET["group"],  $_GET["email"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail"
    }

    exit(json_encode($response));
?>