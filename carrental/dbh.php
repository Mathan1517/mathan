<?php
if (isset($_POST["login"])) {
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "car_rental";

    $uname = $_POST["email-user"];
    $psw = $_POST["password"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userExitspassQuery = "SELECT Password FROM t_user WHERE Username = '$uname'";
    $result = $conn->query($userExitspassQuery);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $userStoredPassword = $row["Password"];

            if ($userStoredPassword === $psw) {
                
                header("Location: index.php");
                exit();
            } else {
                echo "Username or Password Invalid";
            }
        } else {
            echo "Not Registered Your Account.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
