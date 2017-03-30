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
    	printf("<p><a href='viev_cat.php?cat=%s'>%s</a></p>",$myrow2['id'],$myrow2['title']);
    }
    while ($myrow2 = mysqli_fetch_array($result2));

}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}
	?>
</td>
