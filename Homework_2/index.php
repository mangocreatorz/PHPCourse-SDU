<?php
include('login.php'); 
if(isset($_SESSION['login_user'])){
header("location: profile.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>

</head>
<body>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>