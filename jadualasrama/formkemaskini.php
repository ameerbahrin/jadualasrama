<?php
include 'linkdb.php';
$minggu = $_GET['minggu'];

$result = mysqli_query($con,"SELECT * FROM jadual WHERE minggu=$minggu");
while ($res = mysqli_fetch_array($result)) {
	$minggu = $res['minggu'];
	$isnin = $res['isnin'];
	$selasa = $res['selasa'];
	$rabu = $res['rabu'];
	$khamis = $res['khamis'];
	$jumaat = $res['jumaat'];
	$sabtu = $res['sabtu'];
	$ahad = $res['ahad'];
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>KEMASKINI JADUAL</title>
</head>
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
<body>

<center><h1 id="font1">KEMASKINI JADUAL</h1></center>
<center>
<fieldset>
<form method="post" action="edit.php" id="tableu">
<table>

            <b>Minggu: </b>
            <input type="text" name="minggu" readonly 
              value="<?php echo $minggu;?>"><br><br>

            <b>Isnin: </b>
            <input type="text" name="isnin"
              value="<?php echo $isnin;?>"><br><br>
	
            <b>Selasa: </b>
            <input type="text" name="selasa"
              value="<?php echo $selasa;?>"><br><br>

            <b>Rabu: </b>
            <input type="text" name="rabu"
              value="<?php echo $rabu;?>"><br><br>

            <b>Khamis: </b>
            <input type="text" name="khamis"
              value="<?php echo $khamis;?>"><br><br>
          
            <b>Jumaat: </b>
            <input type="text" name="jumaat"
              value="<?php echo $jumaat;?>"><br><br>
        
            <b>Sabtu: </b>
            <input type="text" name="sabtu"
              value="<?php echo $sabtu;?>"><br><br>
          
            <b>Ahad: </b>
            <input type="text" name="ahad"
              value="<?php echo $ahad;?>"><br><br>
          
		<br><input type="submit" name="submit" id="submit" value="Submit">
	
</table>
</form>
</fieldset>
</center>
</body>
</html>