
<link rel="stylesheet" href="menustyle.css">

<nav>
<ul class="menulinje>
<li><a href="phpMenu.php" <?php if ($curpage=='phpmenu.php') { echo 'class="active"';}?>>Forside</a></li>
<li><a href="information.php" <?php if ($curpage=='information.php') { echo 'class="active"';}?>>Information</a></li>
<li><a href="kontakt.php" <?php if ($curpage=='kontakt.php') { echo 'class="active"';}?>>Kontakt</a></li>
<li><a href="login.php" <?php if ($curpage=='login.php') { echo 'class="active"';}?>>Login</a></li>
<li><a href="restricted.php" <?php if ($curpage=='restricted.php') { echo 'class="active"';}?>>Hemmelig side</a></li>

</ul>


</nav>
<br>
<hr>