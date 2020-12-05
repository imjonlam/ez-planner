<?php
    include 'connect.php'
    $conn = connect();

    $sql = "SELECT group_name, description FROM groups";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    header('Content-type: application/json');
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    $stmt->close();

    exit;
?>