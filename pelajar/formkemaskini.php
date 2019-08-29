<!DOCTYPE html>
<html>
<head>
	<title>Form Pelajar</title>
</head>
<body>
<?php
include 'linkdb.php';

$id=$_GET['id'];

$students=mysqli_query($con,"select * from students where id='$id'");
$row=mysqli_fetch_array($students);	
?>

<form method="POST" action="pros_update.php">
<h3 align="center">Kemaskini Data Pelajar</h3>
<table width="500" align="center" cellspacing="0" cellpadding="0" border="1" bgcolor="white">
	<tr>
	<td height="40" >No Id</td>
	<td>:<input type="text" name="id" value="<?php echo $row['id'];?>"></td>
	</tr>
	
	<tr>
	<td  height="40"> Nama</td>
	<td>:<input type="text" name="nama_pelajar" value="<?php echo $row['nama_pelajar'];?>"></td>
	
	</tr>
	<tr>
	<td height="40" >Nombor IC</td>
	<td>:<input type="text" name="no_kp" value="<?php echo $row['no_kp'];?>"></td>
	
	</tr>
	<tr>
	<td height="40" > Program</td>
	<td>:<input type="text" name="program" value="<?php echo $row['program']; ?>"></td>

	</tr>
	<tr>
	<td  height="40"> alamat</td>
	<td>:<input type="text" name="Alamat" value="<?php echo $row['Alamat']; ?>"></td>
	</tr>

</table>
<center><input type="submit" name="submit" value="Update Data"></center>
</form></body>
</html>