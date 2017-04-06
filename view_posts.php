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
                    //вывод коментариев
                  echo "<p class='comm_title'>Комментарии к этой заметке:</p>";
                  $result3 = mysqli_query($db, "SELECT * FROM comments WHERE post='$id'");
                  if (mysqli_num_rows($result3)>0) {
                    $myrow3 = mysqli_fetch_array($result3);
                  
                  do {
                      printf ("
                        <div class='comm_wrap'>
                        <p class='comm_auth'>Комментарий добавил: <b>%s</b></p>
                        <p class='comm_date'>Дата: <b>%s</b></p>
                        <p class='comm_text'>%s</p>
                        </div>
                       ",
                       $myrow3['author'],$myrow3['date'],$myrow3['text']);
                  }
                  while($myrow3 = mysqli_fetch_array($result3));
                  } 

                  $result4 = mysqli_query ($db, "SELECT img FROM comments_setting");
                  $myrow4 = mysqli_fetch_array($result4);
                ?>

                <p class='comm_title'> Добавить Ваш комментарий</p>
                <form method="post" action="comment.php" name="form_com">
                  <p><label>Ваше имя:</label>
                   <input type="text" name="Author" size="30" maxlength="40"></p>
                   <p><label>Текст комментария: <br><textarea name="text" cols="33" rows="4"></textarea></label></p>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                   
                    <p>Введите сумму чисел с картинки</p>
                    <p><img src="<?php echo $myrow4['img']; ?>"><input type="text" name="pr" size="5" maxlength="5" style="margin-top: 7px;vertical-align: top;"></p>
                    <p>
                   
                      <button type="submit" name="sub_com" value="Комментировать">Комментрировать</button>
                    </p>

                </form>

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