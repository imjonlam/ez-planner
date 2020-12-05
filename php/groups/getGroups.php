<?php
    include 'connect.php'
    $conn = connect();

    $sql = "SELECT g.group_name, g.description, GROUP_CONCAT(m.user) as 'members' FROM groups g, group_members m WHERE g.group_name = m.group_name";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    header('Content-type: application/json');
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
    $stmt->close();

    exit;
?>