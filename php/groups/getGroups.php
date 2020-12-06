<?php
    include '../connect.php';
    $conn = connect();

    $sql = "SELECT g.group_name, g.description, (SELECT GROUP_CONCAT(m.user) FROM group_members m WHERE g.group_name = m.group_name) AS members FROM groups g";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    exit(json_encode($result->fetch_all(MYSQLI_ASSOC)));
?>


"SELECT g.*, (SELECT GROUP_CONCAT(m.user) FROM group_members m WHERE g.group_name = m.group_name) AS members FROM groups g"