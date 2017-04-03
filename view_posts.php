<?php
    include "blocks/db.php";

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if (!isset($id)) {
    $id= 1;
}

    $result = mysqli_query($db, "SELECT * FROM data WHERE id='$id'");

   if (!$result) {
    echo "<p>Запрос на выборку данных их базы не прошел. Напишите об этом администратору. <br>Код ошибки:</p>";
    exit(mysqli_error());
} 
if(mysqli_num_rows($result)>0){

    $myrow = mysqli_fetch_array($result);
    $new_view = $myrow['view'] + 1;
   $update =  mysqli_query ($db, "UPDATE data SET view='$new_view' WHERE id='$id'");

}
else {
    echo "<p>Информация по запросу не может быть извлечена. В таблице нет записей.</p>";
    exit();
}
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title><?php echo $myrow['title'];?></title>
        <meta name="description" content="<?php echo $myrow['meta_d'];?>">
        <meta name="keywords" content="<?php echo $myrow['meta_k'];?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table class="main_border" align="center" cellpadding="0" cellspacing="0"> 
        <?php
            include("blocks/header.php");
        ?>

        <tr>
            <td>
              <table align="center" cellpadding="0" cellspacing="0">
         <tr>
        <?php
            include("blocks/left.php");
        ?>
            <td width="508px" class="v_top">
                <?php
                  printf("
                    <h1>%s</h1>
                    <p>Дата записи: %s</p>
                    <p>Автор записи:%s</p>
                    <div class='post_text'>%s</div>
                    <p>Количество просмотров: %s</p>

                    ",$myrow['title'],$myrow['date'],$myrow['author'],$myrow['text'],$myrow['view']);

                ?>

            </td>
        </tr>

        </table>

            </td>
        </tr>
        <?php
            include("blocks/footer.php");
        ?>
        
    </table>
    
    
</body>
</html>