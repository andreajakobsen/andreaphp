<?php 
session_start();

$curpage='restricted.php';
include 'menumenu.php';

/* echo session_id(); */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restricted</title>
</head>
<body>


<?php if(isset($_SESSION['uid'])){ 

	header("location: login.php");
 }else{
	echo '<h1>Welcome to the secret page, you have succesfully logged in!</h1>';
	echo '<a href="logout.php">logout</a>';

}
?>


</body>
</html>

