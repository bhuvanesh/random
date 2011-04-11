<html>
<body>
<link href="../CSS/signup_form.css" rel="stylesheet" type="text/css" />
<form action="signup_user.php" method="POST"><br/>
<fieldset>
<legend>Sign-up Form</legend>
<p><label for="name">Name : </label><input type="text" name="name"><br/></p>
<p><label for="password">Password : </label><input type="password" name="pass"><br/></p>
<p><label for="email">Email : </label><input type="text" name="email"><br/></p>
<p><label for="name">Age : </label><input type="text" name="age"><br/></p>
 <?php
          require_once('../captcha/recaptchalib.php');
          $publickey = "6LcaTsMSAAAAAPSr6W_yqVszxL-EqmKNaPvrgewp"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>

<br/>
<input type="submit" value="submit" name="submit"><br/>
</fieldset>
</form>
</body>
</html>
