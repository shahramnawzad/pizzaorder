<?php session_start(); ?>
<?php include'config.php';?>
<?php include'header.php';?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	$name_error = NULL; 
	?>

	<form action="order.php" method="POST">
		<div class="frm">
		<h2 class="cpz"> create a new pizza </h2>
		<div class="yn">your name</div>
		<input type="text" name="name" class="nam" ><br><br>
		<div class="error"><?php echo $name_error ?></div>
		<div class="ch">choose type of pizza</div>
		<select class="op" name="type">
		<option >Pepperoni</option>
		<option value="Buffalo">Buffalo</option>
		<option value="Meat">Meat</option>
	</select><br><br>
	<div class="yn">choose crust</div>
	<select class="op2" name="crust">
		<option value="thick" >thick</option>
		<option value="thin" >thin</option>
		
	</select>
<br><br>
	<div class="yn"> extra toppings</div>
	<input type="checkbox" name="extra[]" value="mushrooms">mushrooms<br>
	<input type="checkbox" name="extra[]" value="peppers">peppers<br>
	<input type="checkbox" name="extra[]" value="garlic">garlic<br>
	<input type="checkbox" name="extra[]" value="olives">olives<br>
	<button name="order" class="btn">order pizza</button>



</div>
	</form>

	<?php 
	$_SESSION['nsent'] = session_destroy();


	

	if (isset($_POST['order'])) {
		$name = $_POST['name'];
		$type = $_POST['type'];
		$crust =$_POST['crust'];
		$extra = $_POST['extra'];
		$all = implode(",",$extra);

		if (empty($name)) {
			echo $name_error = "field name is empty";
			$_SESSION['nsent'];
		}

		$queryy = mysqli_query($db,"INSERT INTO `orderr`(`name`,`type`,`crust`,`extra`) VALUES('$name','$type','$crust','$all')");
		if ($queryy) {
			echo "<p style ='color:green; position:relative; left:37%; top:90px; font-size:22px;'>ordered successfuly...</p>";
		}
	}

	
	?>

</body>
</html>