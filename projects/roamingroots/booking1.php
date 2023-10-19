<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "roamingroots";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$date = $_POST['date'];
$pickup = $_POST['pickup'];
$drop = $_POST['drop'];
$time = $_POST['time'];

$sql = "INSERT INTO booking1 (name, email, phone, city, date, pickup, `drop`, time)
VALUES ('$name', '$email', '$phone', '$city', '$date', '$pickup', '$drop', '$time')";

if ($conn->query($sql) === TRUE) {
    header("Location: bookingform.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>