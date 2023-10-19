<?php
$uname = $_POST['uname'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];

$conn = new mysqli('localhost', 'root', '', 'roamingroots');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $sql = "INSERT INTO `contactform` (`FullName`, `email`, `PhoneNumber`) VALUES ('$uname', '$email', '$phonenum')";
	$result=mysqli_query($conn,$sql);

}