<?php
if (isset($_POST["registerbtn"])) {
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "car_rental";

    $uname = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone_no"];
    $psw = $_POST["password"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO t_user (Username, Email, Phone, Password) VALUES ('$uname', '$email', '$phone', '$psw')";

    if ($conn->query($sql) === true) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
