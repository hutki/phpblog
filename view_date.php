<?php
include("blocks/db.php");
if (isset($_GET['date'])){
    $date = $_GET['date'];
}
else{
    exit("<p>Вы обратились к файлу без определенных параметров. Проверьте адресную строку.");
}
$date_title = $date;
$date_begin = $date;
$date++;
$date_end = $date;

$date_begin = $date_begin."-01";
$date_end = $date_end."-01";
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title><?php echo "Заметки за $date_title";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table class="main_border" align="center" cellpadding="0"  cellspacing="0">
    	<?php include("blocks/header.php");?>
    	<tr>
	    	<td valign="top">
	    		<table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <?php include("blocks/left.php");?>
                        <td valign="top">
                        <?php
                            $result = mysqli_query($db, "SELECT id,description,view,title,date,author,mini_img FROM data WHERE date>'$date_begin' AND date<'$date_end'");

if (!$result) {
    echo "<p>Запрос на выборку данных их базы не прошел. Напишите об этом администратору. <br>Код ошибки:</p>";
    exit(mysqli_error());
} 
if(mysqli_num_rows($result)>0){

    $myrow = mysqli_fetch_array($result);
    do {
        printf(
            "<div class='cat_view'>
                %s
                <div class='cat_data'>
                    <a href='view_posts.php?id=%s'>%s</a>
                    <br>
                    <p>%s</p>
                    <span>%s</span>
                    <span>%s</span>
                    <p>Просмотры: %s</p>
                </div>
            <div class='clear'></div>
            </div>",
           $myrow['mini_img'],$myrow['id'],$myrow['title'],$myrow['description'],$myrow['date'],$myrow['author'],$myrow['view']);
    }
while ($myrow = mysqli_fetch_array($result));
}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}
                        ?>



                        </td>
                    </tr>

                </table>
	    	</td>
    	</tr>
    	
	    	<?php include("blocks/footer.php");?>
    	
    </table>
</body>
</html>