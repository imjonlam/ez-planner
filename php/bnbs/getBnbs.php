<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT location, address, city, province, contact, price FROM bnbs";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>