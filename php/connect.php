<?php
    function connect() {
        $servername = "localhost";
        $username = "j229lam";
        $password = "janewth=";
        $dbname = "j229lam";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $conn -> set_charset("utf8");
        
        /*
        if (!$conn) {
            die("Connection failed:".mysqli_connect_error());
        } else {
            echo "Connected";
        }
        */

        return $conn;
    }
?>