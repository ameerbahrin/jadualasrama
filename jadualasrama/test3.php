<?php
include 'linkdb.php';

$minggu=$_GET['minggu'];

$jadual=mysqli_query($con,"SELECT * FROM jadual WHERE minggu='$minggu'");
$row=mysqli_fetch_array($jadual);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>KEMASKINI JADUALAHH</title>
	<style>
	
	body{
		background-image: url(img/bg1.jpg);
	}

	h1{
		font-style: italic bold;
	}

	#tableu{
	color: white;
	background-color: rgb(0,0,0,0.7);
	padding-top: 50px;
	padding-bottom: 50px;
	}

	#font1{
		background-color: rgb(131,81,24,0.5);
		color: black;
	}

	#submit{
  padding: 10px 25px;
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

	#submit:hover {background-color: red;}

	#submit:active {
  
  box-shadow: 0 5px black;
  transform: translateY(7px);

	}

</style>
</head>
<body>

<form method="POST" action="update.php">
<table>
	<tr>
		<td>Minggu</td>
		<td>:<input type="text" name="minggu" value="<?php echo $row['minggu'];?>"></td>
	</tr>
	<tr>
		<td>Isnin</td>
		<td>:<input type="text" name="isnin" value="<?php echo $row['isnin'];?>"></td>
	</tr>
	<tr>
		<td>Selasa</td>
		<td>:<input type="text" name="selasa" value="<?php echo $row['selasa'];?>"></td>
	</tr>
	<tr>
		<td>Rabulah</td>
		<td>:<input type="text" name="rabu" value="<?php echo $row['rabu'];?>"></td>
	</tr>
	<tr>
		<td>Khamis</td>
		<td>:<input type="text" name="khamis" value="<?php echo $row['khamis'];?>"></td>
	</tr>
	<tr>
		<td>Jumaat</td>
		<td>:<input type="text" name="jumaat" value="<?php echo $row['jumaat'];?>"></td>
	</tr>
	<tr>
		<td>Sabtu</td>
		<td>:<input type="text" name="sabtu" value="<?php echo $row['sabtu'];?>"></td>
	</tr>
	<tr>
		<td>Ahad</td>
		<td>:<input type="text" name="ahad" value="<?php echo $row['ahad'];?>"></td>
	</tr>
</table>
	
</form>

</body>
</html>