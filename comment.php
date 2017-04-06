<?php
include("blocks/db.php");
if (isset($_POST['author'])) {
	$author = $_POST['author'];
}
if (isset($_POST['text'])) {
	$text = $_POST['text'];
}
if (isset($_POST['pr'])) {
	$pr = $_POST['pr'];
}
if (isset($_POST['sub_com'])) {
	$sub_comr = $_POST['sub_com'];
}
if (isset($_POST['id'])) {
	$id = $_POST['id'];
}
if (isset($sub_com))
{
if (isset($author)) {
	trim($author);
}
else {
	$author = '';
}
if (isset($text)) {
	trim($text);
}
else {
	$text = '';
}
if (empty($author) or empty($text)) {
	exit("<p>Вы ввели не всю информацию, вернитесь назад и заполните все поля.<br><button type='button' name='back' onclick='javascript:self.back();'>Вернуться назад<button></p>");
}








}

?>