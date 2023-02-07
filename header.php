<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<header>
<ul class="ul">
<li><h1>Pizza House</h1></li>
<li><a href="index.php">Home</a></li>
<li><a href="order.php">Pizza Order</a></li>
<li><a href="pizaorder.php">all order</a></li>
<li><a href="login.php">Login</a></li>


<h6>
<?php
date_default_timezone_set('Asia/Baghdad');
echo date('Y/m/d'); echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo date('h:i:s');
  ?>
</h6>
</ul>
</header>
</body>
</html>