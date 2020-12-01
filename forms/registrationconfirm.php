<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,300;0,700;0,800;1,100;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/~auchimar/CPS530/css/cps530.css">
</head>
    <body>
        <?php
            include '/~auchimar/CPS530/common/navbar.html';
        ?>
        <?php
            $servername = "localhost";
            $username = "auchimar";
            $password = "yinhayd<";
            $dbname = "auchimar";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed:".mysqli_connect_error());
            } else {
                echo "Connected";
            }

            $sql = "SELECT id, firstname, lastname, address, city, province, postal from users";
            $result = $conn->query($sql);
        ?>