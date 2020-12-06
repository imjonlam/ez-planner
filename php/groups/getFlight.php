<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT airline, class, origin, origin_code, destination, destination_code, price, stops, duration, img FROM flights, group_flights WHERE group_name = ? AND airline = flight";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET["group"]);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(echo json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>