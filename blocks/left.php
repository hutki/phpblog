<td width="182px" class="left" valign="top">
<div class="nav_title">
	Категории
</div>
	<? 
		$result2 = mysqli_query($db,"SELECT * FROM categories");

if (!$result2) {
    echo "<p>Запрос на выборку данных их базы не прошел. Напишите об этом администратору. <br>Код ошибки:</p>";
    exit(mysqli_error());
} 
if(mysqli_num_rows($result2)>0){

    $myrow2 = mysqli_fetch_array($result2);
    do{
    	printf("<p><a href='view_cat.php?cat=%s'>%s</a></p>",$myrow2['id'],$myrow2['title']);
    }
    while ($myrow2 = mysqli_fetch_array($result2));

}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}
	?>

    <div class="nav_title">Последние заметки</div>

<?php
        $result3 = mysqli_query($db, "SELECT id, title FROM data ORDER BY date DESC, id DESC LIMIT 5");

   if (!$result3) {
    echo "<p>Запрос на выборку данных их базы не прошел. Напишите об этом администратору. <br>Код ошибки:</p>";
    exit(mysqli_error());
} 
if(mysqli_num_rows($result3)>0){

    $myrow3 = mysqli_fetch_array($result3);
   do{
        printf("<p><a href='view_posts.php?id=%s'>%s</a></p>",$myrow3['id'],$myrow3['title']);
    }
    while ($myrow3 = mysqli_fetch_array($result3));

}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}
?>
    <div class="nav_title">Архив</div>
    <?php
        $result4 = mysqli_query($db, "SELECT DISTINCT left(date,7) AS month FROM data ORDER BY month DESC");

   if (!$result4) {
    echo "<p>Запрос на выборку данных их базы не прошел. Напишите об этом администратору. <br>Код ошибки:</p>";
    exit(mysqli_error());
} 
if(mysqli_num_rows($result4)>0){

    $myrow4 = mysqli_fetch_array($result4);
   do{
        printf("<p><a href='view_date.php?date=%s'>%s</a></p>",$myrow4['month'],$myrow4['month']);
    }
    while ($myrow4 = mysqli_fetch_array($result4));

}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}
?>

</td>
