<?php
    session_start();
    include 'connect.php';
    
    $conn = connect();

    $email= $_POST['email'];

    # check if user already exists
    $sql = "SELECT email FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $stmt->close();

    $row_cnt = $result->num_rows;
    if ($row_cnt == 1) {
        $_SESSION['error'] = 'Account already associated with that email';
        header("Location: ../panel/forms/login.html");
        exit(1);
    }
    # Encrypt password
    $password = $_POST['password'];
    $options = [
            'cost' => 12,
        ];
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $postalcode = $_POST["postalcode"];
    $country = $_POST["country"];

    # register otherwise
    $sql = "INSERT INTO users (email, first_name, last_name, password, address, city, province, postal_code, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssssss", $email, $firstname, $lastname, $password, $address, $city, $province, $postalcode, $country);

    if ($stmt->execute()) {
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['address'] = $address;
        $_SESSION['city'] = $city;
        $_SESSION['province'] = $province;
        $_SESSION['postalcode'] = $postalcode;
        $_SESSION['country'] = $country;
        header("Location: ../panel/groups/index.html");
        exit();
    } else {
        $_SESSION['error'] = 'Error occurred, please refill the form';
        header("Location: ../panel/forms/registration.html ");
        exit();
    }
    
    exit();
?>