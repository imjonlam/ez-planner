<?php
    session_start();
    include 'connect.php';
    
    $conn = connect();

    $email= $_SESSION['email'];

    $newemail = $_POST['email'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $province = $_POST["province"];
    $postalcode = $_POST["postalcode"];
    $country = $_POST["country"];

    $query = "UPDATE users SET ";
    $query .="email = '{$newemail}', ";
    $query .="first_name = '{$firstname}', ";
    $query .="last_name = '{$lastname}', ";
    $query .="address = '{$address}', ";
    $query .="city = '{$city}', ";
    $query .="postal_code = '{$postalcode}', ";
    $query .="country = '{$country}' ";
    $query .="where email = '{$email}' ";

    if ($conn->query($query)===TRUE) {
        $_SESSION['email'] = $newemail;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['address'] = $address;
        $_SESSION['city'] = $city;
        $_SESSION['province'] = $province;
        $_SESSION['postalcode'] = $postalcode;
        $_SESSION['country'] = $country;
        header("Location: ../panel/Account/account.php");
        $conn->close();
        exit();
    } else {
        $_SESSION['error'] = 'Error occurred, please refill the form';
        header("Location: ../panel/Account/account.php");
        $conn->close();
        exit("Update failed, please try again");
    }
    $conn->close();
    exit();
?>