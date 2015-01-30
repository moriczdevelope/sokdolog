<?php

ob_start();
$host="mysql8.iworx-host.com"; // Host name 
$username="moczyhu_sd_sql"; // Mysql username 
$password="Q1w2e3r4"; // Mysql password 
$db_name="moczyhu_sokdolog"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_GET['myusername']; 
$mypassword=$_GET['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:http://moczy.hu/sokdolog/logindex.php?myusername=$myusername");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>