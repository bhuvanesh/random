<html>
<body>
<form action="PHP/signup_user.php" method="POST"><br/>
Name     : <input type="text" name="name"><br/>
Password : <input type="password" name="pass"><br/>
email    : <input type="text" name="email"><br/>
age 	 : <input type="text" name="age"><br/>
 <?php
          require_once('captcha/recaptchalib.php');
          $publickey = "6LcaTsMSAAAAAPSr6W_yqVszxL-EqmKNaPvrgewp"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>

<input type="submit" value="submit" name="submit"><br />
</form><br /> 
