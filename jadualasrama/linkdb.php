<?php
$host='localhost';
$user='root';
$password='123456';
$dbname='jadualasrama';

$con=mysqli_connect($host,$user,$password,$dbname);

if (!$con) {
	echo "fail connect";
}
else{
	echo "";
}
?>