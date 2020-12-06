<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT location, address, city, province, postal_code, country, contact, price, rating, img FROM bnbs, group_bnbs WHERE group_name = ? AND location = bnb";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET["group"]);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(echo json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>