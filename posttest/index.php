<?php $results = $_POST["postingvalue"]; ?>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		<form method="post" action="index.php">
		<input type="text" name="postingvalue"><br>
		<input type="submit" name="submit" value="Submit"><br></form>
		<form method="get" action="index.php">
		Results: <?php echo $results; ?>
	</body>
</html>