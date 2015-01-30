<?php
ob_start();
session_start();

include "deprecated.php";
include "notice.php";
include "parse.php";
include "warning.php";

$host="mysql8.iworx-host.com"; // Host name 
$username="moczyhu_sd_sql"; // Mysql username 
$password="Q1w2e3r4"; // Mysql password 
$db_name="moczyhu_sokdolog"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']or die("failed for post");
$mypassword=$_POST['mypassword']or die("faild for post");

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername)or die("");
$mypassword = stripslashes($mypassword)or die("");
$myusername = mysql_real_escape_string($myusername)or die("");
$mypassword = mysql_real_escape_string($mypassword)or die("");
$sql="INSERT INTO `$db_name`.`$tbl_name` (`username`, `password`) VALUES ('$myusername', '$mypassword');";
$result=mysql_query($sql);

$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword;
ob_end_flush();
?>