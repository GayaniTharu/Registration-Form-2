<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// create connection

$con =mysqli_connect("localhost","root","","registerform");
$q="inert into registration value(NULL,'$firstname','$lastname','$email','$password')";


//check connection
if (!$con){
    die("Connection failed : " . mysqli_connect_error());

}
echo "Connection Successfully ! ";

?>