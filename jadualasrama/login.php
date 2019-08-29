<?php

require('linkdb.php');

session_start();

if (isset($_SESSION['username'])) {
	header("Location: login.php");
}

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

$sql = "select * from login where username='$username' and password='$password'";
		
		$hasil = mysqli_query($con,$sql);


if (mysqli_num_rows($hasil)) {
	$_SESSION['username'] = $username;

	header("Location: jadual.php");
}else{
	echo "<script>alert('Username atau password anda salah');
			window.location='login.php'</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN TO JADUAL</title>
</head>
<style>
	
	body{
		background-image: url(img/bg1.jpg);
	}

	@font-face {
  	font-family: myFirstFont;
  	src: url(Bungasai.ttf);

	}
	h1 {
  	font-family: myFirstFont;
  	font-size: 60px;
  	height: 10px;
  	color: white;

	}

	#section{
  	width: 1000px;
  	background-color: rgba(0,0,0,0.75);
  	margin-top: 100px;
  	height: 500px;
	}

	#form{
		color: white;
	}

	#form input[type = "text"],
	#form input[type = "password"]{
	border: 0;
	background: none;
	display: block;
	margin-top: 50px;
	text-align:center;
	border: 5px solid #3498db;
	padding: 4px 5px; 
	width: 250px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	}

	#form input[type = "text"]:focus,
	#form input[type = "password"]:focus{
	width: 300px;
	border-color: #23cc71;
	}

	#username{
		padding-top: 70px;
	}

	#dalam{
	
	font-size: 20px;
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
<center>
<section id="section">
<h1>LOGIN TO JADUAL</h1>

<form id="form" method="POST">
	
	<b id="username">Username:</b>
	<input type="text" name="username" id="dalam" placeholder="Username" required><br>

	<b>Password:</b>
	<input type="password" name="password" id="dalam" placeholder="Password" required><br>

	<button type="submit" id="submit">Submit</button>

</form>
</center>
</section>
</body>
</html>