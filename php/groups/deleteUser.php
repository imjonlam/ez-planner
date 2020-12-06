<?php
    include '../connect.php';
    $conn = connect();

    $sql = "DELETE FROM group_members WHERE user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET["email"]);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail";
    }

    exit;
?>