<?php
include("db_connect.php");
mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name) or die( "Unable to select database");

$em=$_GET['user_email'];
$query="select name from user_account where email='$em'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{$name_user=$row['name'];}
echo "Hello $name_user!";
?>
