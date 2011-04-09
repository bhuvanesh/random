<?php
//To create the required database and tables implemented so far by the users
//change the variables in the db_connect.php according to your system config of phpmyadmin and mysqlmyadmin
include("../db_connect.php");
mysql_connect($db_host,$db_user,$db_pass);
$query="create database sandbox";
$result = mysql_query($query) or die('Query failed. ' . mysql_error());
mysql_select_db("sandbox") or die( "Unable to select database");
$query="create table user_account(name varchar(20),password text,email varchar(200),age int,primary key(email))";
$result1 = mysql_query($query) or die('Query failed. ' . mysql_error());
if($result)
echo "You can now proceed with testing!";
?>
