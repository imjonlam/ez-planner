<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT make, model, year, type, capacity, allowance, price, transmission, img FROM cars, group_cars WHERE group_name = ? AND car_id = car";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET["group"]);
    $stmt->execute();
    $result = $stmt->get_result();

    header('Content-type: application/json');
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    $stmt->close();

    exit;
?>