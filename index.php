<!DOCTYPE html>
<html>
	<head>
		<meta name="keywords" content="SokDolog, sokdolog, Sokdolog, sokDolog, SOKDOLOG, SOKdolog, sokDOLOG">
		<meta name="author" content="G&P">
		<meta charset="UTF-8">
		<title>SokDolog</title>
	</head>
	
	<body>
		<?php
		if ($_GET['force'] == 1){
		header("location:logindexforce.php");
		}else{
		require 'main_login.php';
		}
		?>
	</body>
</html>