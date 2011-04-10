<?php
  require_once('../captcha/recaptchalib.php');
  $privatekey = "6LcaTsMSAAAAAPmeTWGhQ8gchuPDTMDxxDG8fzgw";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The CAPTCHA wasn't entered correctly. Go back and try it again.");
  } else {
    //code here to handle a successful CAPTCHA verification

include ("../db_connect.php");
mysql_connect($db_host,$db_user,$db_pass);
mysql_select_db($db_name) or die( "Unable to select database");

$u_name=$_POST['name'];
$u_pass=$_POST['pass'];
$u_email=$_POST['email'];
$u_age=$_POST['age'];

$query="insert into user_account values('$u_name','$u_pass','$u_email','$u_age')";
$result = mysql_query($query) or die('Query failed. ' . mysql_error());
if($result)
	{
		echo "registration successful";
		header('Location:profile.php?user_email='.$u_email);
	}
else
{echo "registration failed";}

}
  ?>

