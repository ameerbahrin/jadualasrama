<?php

include 'linkdb.php';

$minggu=$_POST['minggu'];
$isnin=$_POST['isnin'];
$selasa=$_POST['selasa'];
$rabu=$_POST['rabu'];
$khamis=$_POST['khamis'];
$jumaat=$_POST['jumaat'];
$sabtu=$_POST['sabtu'];
$ahad=$_POST['ahad'];

$query="update jadual set minggu='$minggu',isnin='$isnin',selasa='$selasa',rabu='$rabu',
		khamis='$khamis',jumaat='$jumaat',sabtu='$sabtu',ahad='$ahad' where minggu='$minggu'";

if ($result=mysqli_query($con,$query)) {
	echo "berjaya";
	header("Location:jadual.php");
}
else{
	echo "tidak berjaya";
}

?>