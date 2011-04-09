<?php
include("../db_connect.php");
mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name) or die( "Unable to select database");

$u_pass=$_POST['pass'];
$u_email=$_POST['email'];

$query="select password from user_account where email='$u_email'";
$result = mysql_query($query) or die('Query failed. ' . mysql_error());
//using row to store the values in an assosiative array format
while($row=mysql_fetch_array($result))  
{
$t_pass=$row['password'];
}
//echo $result;
if ( $t_pass == $u_pass)
echo "Hello world";
else
echo "authentication failed";


?>
