<?php
$name = $_POST['name'];
$eamil = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$date = $_POST['date'];
$pickup = $_POST['pickup'];
$drop = $_POST['drop'];
$car = $_POST['car'];
$time = $_POST['time'];

$conn = new mysqli('localhost', 'root', '', 'roamingroots');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(Name, Email, Phone, Date, Pickup, Drop, Car, Pickup-time) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $name, $email, $phone, $city, $date, $pickup, $drop,$car, $time);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

}