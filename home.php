<?php 
	session_start();
?>
<?php
$curpage='home.php';
include 'menu.php';
?>



<!--man sætter if ($curpage=='phpmenu.php') { echo 'class="active"';} for at kunne få de enkelte sider til at vise hvilken der er "aktiv" -->
</nav>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register, login and logout user php mysql</title>
</head>
<body>
<!-- selve indholdet der er i et normalt html dokument skal ikke være her, da man henter de forskellige ting in "include" på de andre sider-->



<h1></h1>
<center><div><h4>Velkommen <?php echo $_SESSION['username']; ?></h4></div></center>
</body>
</html>




