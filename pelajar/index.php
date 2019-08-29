<?php
include'linkdb.php';

$query="select id,nama_pelajar,no_kp,program,Alamat from students";
$result=mysqli_query($con,$query);
?>
<table align="center">
<p align="center">Senarai Nama Pelajar</p>
		<td align="center" bgcolor="green">No Id</td>
		<td align="center" bgcolor="green">Nama Pelajar</td>
		<td align="center" bgcolor="green">No Kad Pengenalan</td>
		<td align="center" bgcolor="green">Program</td>
		<td align="center" bgcolor="green">Alamat</td>
			<td align="center" bgcolor="green">Kemaskini</td>
<?php
while ($data=mysqli_fetch_array($result)) {
		$id=$data["id"];

	echo"<tr>";
	echo"<td>".$data["id"]."</td>";
	echo"<td>".$data["nama_pelajar"]."</td>";	
	echo"<td>".$data["no_kp"]."</td>";
	echo"<td>".$data["program"]."</td>";
	echo"<td>".$data["Alamat"]."</td>";
	echo"<td>"."<a href=\"formkemaskini.php?id=$id\">Kemaskini</a>";
	echo"</tr>";
}

?>
<br><br><h3><center><a href="formpelajar.php">Daftar Pelajar</a></center></h3>