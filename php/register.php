<?php
    include 'connect.php'
    $conn = connect();

    # check if user already exists
    $sql = "SELECT email FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET["email"]);
    $stmt->execute();

    $result = $stmt->get_result();
    $stmt->close();

    $row_cnt = $result->num_rows;
    if ($row_cnt == 1) {
        exit(1);
    }
    
    # register otherwise
    $sql = "INSERT INTO users (email, first_name, last_name, password, address, city, province, postal_code, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $password = base64_encode($_GET["password"])
    $stmt->bind_param("sssssssss", $_GET["email"], $_GET["first_name"], $_GET["last_name"], $password, $_GET["address"], $_GET["city"], $_GET["province"], $_GET["postal_code"], $_GET["country"]);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "fail";
    }
    
    exit;
?>