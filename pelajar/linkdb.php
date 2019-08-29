<?php

$host="localhost";
$username="root";
$password="123456";
$dbname="kvtm";

$con=mysqli_connect($host,$username,$password,$dbname);

if (!$con) {
	echo"Fail Connect";
}
else{
	echo"Connected";
}
?>