
<link rel="stylesheet" href="menustyle.css">

<nav>
<ul>
<li class="menulinje"><a href="phpMenu.php" <?php if ($curpage=='phpmenu.php') { echo 'class="active"';}?>>Forside</a></li>
<li class="menulinje"><a href="information.php" <?php if ($curpage=='information.php') { echo 'class="active"';}?>>Information</a></li>
<li class="menulinje"><a href="kontakt.php" <?php if ($curpage=='kontakt.php') { echo 'class="active"';}?>>Kontakt</a></li>
<li class="menulinje"><a href="login.php" <?php if ($curpage=='login.php') { echo 'class="active"';}?>>Login</a></li>
<li class="menulinje"><a href="restricted.php" <?php if ($curpage=='restricted.php') { echo 'class="active"';}?>>Hemmelig side</a></li>

</ul>

<!--man sætter if ($curpage=='phpmenu.php') { echo 'class="active"';} for at kunne få de enkelte sider til at vise hvilken der er "aktiv" -->
</nav>
<br>
<hr>