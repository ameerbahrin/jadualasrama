<?php

include 'linkdb.php';

$query="select minggu,isnin,selasa,rabu,khamis,jumaat,sabtu,ahad from jadual";
$result=mysqli_query($con,$query);

?>


<!DOCTYPE html>
<html>
<head>
<style>
	
	body{
		background-image: url(img/bg1.jpg);
	}

	h1{
		font-style: italic bold;
	}

	#tableu{
	color: black;
	background-color: rgb(0,0,0,0.7);	
	}

	#font1{
		background-color: rgb(131,81,24,0.5);
		color: black;
	}

	#tableu{
		color: white;
		border-radius: 2px;
	}

	#peringatan{
		color: black;
		font-size: 20px;
		font-style: bold;
		background-color: red;
	}

	#dalam{
		text-align: center;
		background-color: yellow;
		color: black;
	}

	#dalam1{
		text-align: center;
		background-color: red;
		color: black;
	}

	#logout{
		padding: 7px 20px;
  		font-size: 20px;
  		cursor: pointer;
  		text-align: center;
  		text-decoration: none;
  		outline: none;
  		color: #fff;
  		background-color: #cf2a27;
  		border-style: solid;
  		border-color: black;
  		border-radius: 15px;
  		box-shadow: 0 9px black;
	}

	#logout:hover {background-color: red;}

	#logout:active {
  
  		box-shadow: 0 5px black;
  	transform: translateY(7px);

	}

	#href{
		color: white;
	}

	#edit{
		padding: 7px 20px;
  		font-size: 20px;
  		cursor: pointer;
  		text-align: center;
  		text-decoration: none;
  		outline: none;
  		color: white;
  		background-color: blue;
  		
	}

	#edit:hover {background-color: #0066ff;}


</style>
	<title>JADUAL AKTIVITI ASRAMA</title>
	<center><div id="font1"><strong><h1>JADUAL AKTIVITI ASRAMA</h1></strong></div><br>

	<img src="img/ks.png" width="15%"></center>
</head>
<body>

	<div id="div">
	<center>
	
<p><table border="2" cellpadding="5" id="tableu">
	<td id="dalam1">MINGGU</td>
	<td id="dalam">ISNIN</td>
	<td id="dalam">SELASA</td>
	<td id="dalam">RABU</td>
	<td id="dalam">KHAMIS</td>
	<td id="dalam">JUMAAT</td>
	<td id="dalam">SABTU</td>
	<td id="dalam">AHAD</td>
	<td id="dalam">Kemaskini</td>

<?php

while ($jadual=mysqli_fetch_array($result)) {
	$minggu=$jadual['minggu'];

	echo "<tr>";
	echo "<td>".$jadual['minggu']."</td>";
	echo "<td>".$jadual['isnin']."</td>";
	echo "<td>".$jadual['selasa']."</td>";
	echo "<td>".$jadual['rabu']."</td>";
	echo "<td>".$jadual['khamis']."</td>";
	echo "<td>".$jadual['jumaat']."</td>";
	echo "<td>".$jadual['sabtu']."</td>";
	echo "<td>".$jadual['ahad']."</td>";
	echo "<td>"."<button id=\"edit\"> <a href=\"edit.php?minggu=$minggu\"; id=\"href\">Edit</a>";
	echo "</tr>";
	}
	echo "</table>";
?>

<i id="peringatan">Peringatan!</i><p>
<i id="peringatan">Jadual dikemaskini setiap hari ahad</i><br>

<a href="logout.php" ><input type="submit" name="logout" id="logout" value="Logout"></a>

</center>
</div>
</body>
</html>