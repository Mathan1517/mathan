<?php
if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "car_rental";

    $location = $_POST["loc"];
    $pickup = $_POST["pdate"];
    $return = $_POST["rdate"];
    

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO  book (location,pickup_d,return_d) VALUES ('$location','$pickup', '$return')";

    if ($conn->query($sql) === true) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
