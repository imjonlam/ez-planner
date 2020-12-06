<?php
    include 'connect.php';
    session_start();
    $conn = connect();

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT email, first_name, last_name, password, address, city, province, postal_code, country FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    $stmt->close();

    $row_cnt = $result->num_rows;
    
    if ($row_cnt == 1) {
        while($row = $result->fetch_assoc()) {
            $dbpassword = $row["password"];
            if (password_verify($password, $dbpassword)) {

                $_SESSION['email'] = $email;
                $_SESSION['firstname'] = $row["first_name"];
                $_SESSION['lastname'] = $row["last_name"];
                $_SESSION['address'] = $row["address"];
                $_SESSION['city'] = $row["city"];
                $_SESSION['province'] = $row["province"];
                $_SESSION['postalcode'] = $row["postal_code"];
                $_SESSION['country'] = $row["country"];
                echo "success";
                #header("Location: ../groups/index.html");
                exit();
            } else {
                $_SESSION['error'] = 'Email or password not valid';
                echo "Invalid password";
                #header("Location: ../forms/login.html");
            } 
            
        }
    } else {
        $_SESSION['error'] = 'Email or password not valid';
        echo "email not found</br>";
        #header("Location: ../forms/login.html");
    } 
    exit();
?>