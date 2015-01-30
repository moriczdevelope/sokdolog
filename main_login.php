<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	
	<body>
		<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
		<form name="form1" method="post" action="checklogin.php">
		<td>
		<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
		</tr>
		</td>
		<tr>
		<td colspan="3"><strong>Bejelentkezés</strong></td>
		</tr>
		<tr>
		<td width="78">Felhasználónév</td>
		<td width="6">:</td>
		<td width="294"><input name="myusername" type="text" id="myusername">
		</td>
		</tr>
		<tr>
		<td>Jelszó</td>
		<td>:</td>
		<td><input name="mypassword" type="password" id="mypassword"></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Klikk!"> &nbsp;
		</form>
		<form name="form2" method="post" action="signup.php">
		<input type="submit" name="Register"value="Regisztráció"></td>
		</tr>
		</table>
		</td>
		</tr>
		</table>
	</body>
</html>