<?php
include 'linkdb.php';

$id=$_POST['id'];
$nama_pelajar=$_POST['nama_pelajar'];
$no_kp=$_POST['no_kp'];
$program=$_POST['program'];
$Alamat=$_POST['Alamat'];

$query="update students set id='$id', nama_pelajar='$nama_pelajar', no_kp='$no_kp', program='$program', Alamat='$Alamat' where id='$id'"; 

if ($result=mysqli_query($con,$query)) {
	echo "data berjaya dikemaskini";
	header('location:index.php');
}
else{
	echo "Data tidak berjaya dikemaskini";	
}
?>