<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT flight_id, airline, class, origin, destination, price, stops, duration FROM flights";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>