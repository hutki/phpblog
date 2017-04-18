<?php
    include "lock.php";
    include("blocks/bd.php");
     if (isset($_POST['id'])) {
       $id = $_POST['id'];
   }
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Страница добавления нового урока</title>
       
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
            include("blocks/lefttd.php");
        ?>
            <td width="508px" class="v_top"> 
            
                <?php
                    
                    if (!isset($id)) {
                        $result = mysqli_query($bd, "SELECT title,id FROM lessons");
                        $myrow = mysqli_fetch_array($result);
                    do{
                        printf("<p><a href='edit_lesson.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
                }
                while ($myrow = mysqli_fetch_array($result));
                }
else{

$result = mysqli_query($bd, "SELECT * FROM lessons WHERE id='$id'");
$myrow = mysqli_fetch_array($result);   
print <<<HERE
                <form name="form1" action="update_lesson.php" method="post">
                    <p>
                         <label>Введите название урока
                        <br>
                        <input value="$myrow[title]" type="text" name="title" id="title">
                        </label>
                    </p>
                    <p>
                        <label>Введите краткое описание урока
                            <br>
                            <input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
                        </label>
                    </p>
                    <p>
                        <label>Введите ключевые слова
                            <br>
                            <input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
                        </label>
                    </p>
                    <p>
                        <label>Введите дату
                         <br>
                            <input value="$myrow[date]" type="text" name="date" id="date" value="2017-03-09">
                        </label>
                    </p>
                     <p>
                        <label>Введите описание урока
                         <br>
                            <textarea  type="text" name="description" id="description" cols="40" rows="5">$myrow[description]</textarea>
                        </label>
                    </p>
                     <p>
                        <label>Введите текст
                         <br>
                            <textarea type="text" name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
                        </label>
                    </p>
                     <p>
                        <label>Введите автора
                         <br>
                            <input value="$myrow[author]" type="text" name="author" id="author">
                        </label>
                    </p>
                    <input name="id" type="hidden" value="$myrow[id]">
                    <button type="submit" name="submit" id="submit">Сохранить изменения</button>
                </form>

HERE;
}


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