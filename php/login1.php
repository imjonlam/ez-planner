<?php
    include 'connect.php'
    $conn = connect();

    # check if user already exists
    $sql = "SELECT email FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    $password = base64_encode($_GET["password"])
    $stmt->bind_param("ss", $_GET["email"], $password);
    $result = $stmt->get_result();

    $row_cnt = $result->num_rows;
    if ($row_cnt == 1) {
        echo "success";
    } else {
        echo "fail";
    }  
?>