<?php
include("blocks/db.php");
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
}

if (!isset($cat)) {
    $cat= 1;
}

$result = mysqli_query($db,"SELECT * FROM categories WHERE id='$cat'");

if (!$result) {
    echo "<p>Запрос на выборку данных их базы не прошел. Напишите об этом администратору. <br>Код ошибки:</p>";
    exit(mysqli_error());
} 
if(mysqli_num_rows($result)>0){

    $myrow = mysqli_fetch_array($result);

}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}

    
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title><?php echo "Заметки категории - $myrow[title]";?></title>
        <meta name="description" content="<?php echo $myrow['meta_d'];?>">
        <meta name="keywords" content="<?php echo $myrow['meta_k'];?>">
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
                        <td valign="top"><?php echo $myrow['text'];?>
                        <?php
                            $result = mysqli_query($db, "SELECT id,description,view,title,date,author,mini_img FROM data WHERE cat='$cat'");

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