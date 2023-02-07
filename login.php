
<?php session_start()  ?>

<?php include"config.php"; ?>

<?php include'header.php';  ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<body>

	<form action="login.php" method="POST" >
<div class="form">
	<div class="up">LOGIN</div>
	<hr>
	<div class="input">
<div class="user">E-mail Address</div> 
<input type="text" name="email" class="nn"><br><br>
<div class="usern">Password</div>
<input type="password" name="password" class="nn">
<button name="login" class="login">Login</button>
</div>
</div>
</form>

<?php


if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($db,"INSERT INTO `login`(`email`,`password`) VALUES('$email','$password')");
	if ($query) {
		echo "<p style ='color:green; position: relative; left: 40%; top:20px;'>  youre logged in<p>";
		echo"  <a href='pizaorder.php'><p style = ' position: relative; left: 39.5%; top:15px;'>view all pizza order</p></a>   ";
		exit();
	}
	
}


  ?>

</body>
</html>