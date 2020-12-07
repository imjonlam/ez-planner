<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT car_id, make, model, year, type, capacity, price FROM cars";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>