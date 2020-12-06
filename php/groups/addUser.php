<?php
    include '../connect.php';
    $conn = connect();

    $sql = "INSERT INTO group_members (group_name, user) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST["group"],  $_POST["email"]);

    $response = array();
    if ($stmt->execute()) {
        $response["success"] = "success";
    } else {
        $response["error"] = "fail";
    }

    exit(json_encode($response));
?>