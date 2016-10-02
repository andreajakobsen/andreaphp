<?php
$curpage='login.php';
include 'menu.php';
?>

<?php require_once 'dbconst.php'; ?>



<br><br>
 <div class="wrapper">
<div id="formular"> <p>Opret ny bruger her:</p>
<form action="createuser.php" method="post">
Email <br>
<input id="tekstfelt" type="email" name="email" required><br><br>
Password<br>
<input id="tekstfelt" type="password" name="password" required><br><br>
<input id="knap1" type="submit" name="submitReg" value="Registrer ny">
</form>
</div>

 <br>
 
 <div id="formular2"> <p>Log ind her:</p><br><br>
<form action="loginlogic.php" method="post" name="login">
  Email: <br>
  <input id="tekstfelt" type="email" name="email" required><br>
  <br>
  Password: <br>
  <input  id="tekstfelt" type="password" name="password" required><br><br>
  <input id="knap" type="submit" name="login" value="Login">
</form></div>
</div>
 
 <br><br><br