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
<h1 class="all">All Order</h1>

<?php 

      $query = mysqli_query($db , "SELECT * FROM `orderr`;");   
       while($row = mysqli_fetch_assoc($query)){?> 
       	<div class="post">
       	<p class="idd"><?php echo $row['id'];?>:</p> 
       	<p class="nww"><?php echo $row['name'];?></p>
       <a  href="view.php?postid=<?php echo $row['id'];?>" class = 'view'>view order</a>
   </div>
       <?php }?>





</body>
</html>