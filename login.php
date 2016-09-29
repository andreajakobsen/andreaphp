<?php
$curpage='login.php';
include 'menu.php';

?>

<?php require_once 'dbconst.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Anen hindkjaer" />
<title>login</title>
</head>
<body>

 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create user</title>
</head>
<body>

<form action="createuser.php" method="post">
Email
<input type="email" name="email" required><br>
Password
<input type="password" name="password" required><br>
Submit
<input type="submit" name="submitReg" value="Register">
</form>
</body>
</html>
<br><br>
<form action="loginlogic.php" method="post" name="login">
  Email:
  <input type="email" name="email" required>
  <br>
  Password:
  <input type="password" name="password" required>
  <br>
  <input type="submit" name="login" value="Login">
</form><br><br>



</body>
</html>