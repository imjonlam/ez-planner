<?php
    session_start();

    $email = $_SESSION["email"];
    include '../../php/connect.php';
    
    $conn = connect();
    
    $sql = "SELECT first_name, last_name, password, address, city, province, postal_code, country FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    $stmt->close();
    
    while($row = $result->fetch_assoc()) {
        $firstname = $row["first_name"];
        $lastname = $row["last_name"];
        $address = $row["address"];
        $city = $row["city"];
        $province = $row["province"];
        $postalcode = $row["postal_code"];
        $country = $row["country"];       
    }
    
?>

<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4.5.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../css/cps530.css">
    <title>My Profile</title>

    <script>
        $(function () {
            $("#nav-placeholder").load("../../common/navbar.html");
            $("#footer-placeholder").load("../../common/footer.html");
        });
    </script>
</head>
<body class="d-flex flex-column min-vh-100">

    <header id="nav-placeholder"></header>

    <div class="container">
    <div class="mb-3"></div>
    <div class="row justify-content-center">
            <h2 class="display-5 text-center">My Profile</h2>
        </div>
        <form action="../../php/update.php" class="form" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $firstname; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $lastname; ?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Street Address</label>
                <input type="text" name="address" class="form-control" id="address" value="<?php echo $address; ?>"
                    required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" value="<?php echo $city; ?>" required>
                </div>
                <div class="form-group col-md-2 col-6">
                    <label for="province">Province</label>
                    <input type="text" name="province" class="form-control" id="province" value="<?php echo $province; ?>" required>
                </div>
                <div class="form-group col-md-2 col-6">
                    <label for="postalcode">Postal Code</label>
                    <input type="text" name="postalcode" class="form-control" id="postalcode" minlength="5"
                        maxlength="6" value="<?php echo $postalcode; ?>" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" id="country" value="<?php echo $country; ?>" required>
                </div>
            </div>
            <div class="mb-3"></div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-long theme-col">Update</button>
            </div>
        </form>
    </div>

    <footer id="footer-placeholder" class="mt-auto"></footer>

</body>
</html>
