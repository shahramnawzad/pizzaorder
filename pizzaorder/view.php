<?php include'header.php';?>
<?php include'config.php';?>

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

$postid = $_GET['postid'];
$query = mysqli_query($db, "SELECT * FROM `orderr` WHERE `id` = '$postid'");
while ($row = mysqli_fetch_assoc($query)) {?>
	<div class="vv">
	<h3> order for <?php echo $row['name'];?></h3>
	<h4>Type - <?php echo $row['type'];?> </h4>
	<h4>crust - <?php echo $row['crust'];?></h4>
	<h4>extra topping - <?php echo $row['extra'];?></h4>
</div>
<?php } ?>
</body>
</html>