<?php
include 'linkdb.php';

$id=$_POST['id'];
$nama_pelajar=$_POST['nama_pelajar'];
$no_kp=$_POST['no_kp'];
$program=$_POST['program'];
$Alamat=$_POST['Alamat'];

$query="insert into students (id,nama_pelajar,no_kp,program,Alamat) values('$id','$nama_pelajar','$no_kp','$program','$Alamat')";

if (mysqli_query($con,$query)) {
echo"Data berjaya direkod";
header('location:index.php');
}
else{
	echo"data tidak berjaya direkod";
}
?>
