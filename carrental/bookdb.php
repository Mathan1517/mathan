<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $location = $_POST["location"];
    $pickUpDate = $_POST["pdate"];
    $returnDate = $_POST["rdate"];

    // Perform basic validation (you should do more thorough validation)
    if (empty($location) || empty($pickUpDate) || empty($returnDate)) {
        echo "Please fill in all the fields.";
    } else {
        // Database connection
        $servername = "your_server_name";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database_name";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO bookings (location, pick_up_date, return_date) VALUES ('$location', '$pickUpDate', '$returnDate')";

        if ($conn->query($sql) === TRUE) {
            echo "Booking successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
