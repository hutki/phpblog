<?php
$db = mysqli_connect("localhost","vit","");
mysqli_set_charset($db, 'utf8'); 
mysqli_select_db($db, "phpblog");
?>