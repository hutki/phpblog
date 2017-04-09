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
	$sub_com = $_POST['sub_com'];
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
	exit("<p>Вы ввели не всю информацию, вернитесь назад и заполните все поля.<br><button type='button' name='back' onclick='javascript:history.back();'>Вернуться назад</button></p>");
}

$author = stripcslashes($author);
$text = stripcslashes($text);
$author = htmlspecialchars($author);
$text = htmlspecialchars($text);


$result = mysqli_query ($db, "SELECT sum FROM comments_setting");
$myrow = mysqli_fetch_array ($result);

if ($pr == $myrow['sum']) {
	date_default_timezone_set('Europe/Minsk');
	$date = date("Y-m-d");
$result2 = mysqli_query ($db, "INSERT INTO comments (post,author,text,date) VALUES ('$id','$author','$text','$date')");
	$addres = "xampp@text.com";
	$subject = "Новый коммент в блоге";
	$result3 = mysqli_query($db,"SELECT title FROM data WHERE id='$id'");
	$myrow3 = mysqli_fetch_array ($result3);
	$post_title = $myrow3["title"];
	$messege = "Появился комментарий к заметке - ".$post_title."\n Комментарий добавила: ".$author."\n Текст комментария ".$text."\n Ссылка на заметку http://phpblog.loc/view_posts.php?id=".$id."";
	mail($addres,$subject,$messege,"Content-type:text/plain");
	//перенаправление обратно на страницу
	echo "<html>
	<head><meta http-equiv='Refresh' content='0; URL=view_posts.php?id=$id'</head>
	</html>";
	exit();
} 
else {
	exit("<p>Вы ввели не верную сумму с картинки на предыдущей странице.<br><button type='button' name='back' onclick='javascript:history.back();'>Вернуться назад</button></p>");
}










}

?>

