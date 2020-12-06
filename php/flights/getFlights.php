<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT flight_id, airline, class, origin, origin_code, destination, destination_code, price, stops, duration, img FROM flights";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(echo json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>