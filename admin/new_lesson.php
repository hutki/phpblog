<?php
include "lock.php";
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
                <form name="form1" action="add_lesson.php" method="get">
                    <p>
                         <label>Введите название урока
                        <br>
                        <input type="text" name="title" id="title">
                        </label>
                    </p>
                    <p>
                        <label>Введите краткое описание урока
                            <br>
                            <input type="text" name="meta_d" id="meta_d">
                        </label>
                    </p>
                    <p>
                        <label>Введите ключевые слова
                            <br>
                            <input type="text" name="meta_k" id="meta_k">
                        </label>
                    </p>
                    <p>
                        <label>Введите дату
                         <br>
                            <input type="text" name="date" id="date" value="2017-03-09">
                        </label>
                    </p>
                     <p>
                        <label>Введите описание урока
                         <br>
                            <textarea  type="text" name="description" id="description" cols="40" rows="5"></textarea>
                        </label>
                    </p>
                     <p>
                        <label>Введите текст
                         <br>
                            <textarea type="text" name="text" id="text" cols="40" rows="20"></textarea>
                        </label>
                    </p>
                     <p>
                        <label>Введите автора
                         <br>
                            <input type="text" name="author" id="author">
                        </label>
                    </p>

                    <button type="submit" name="submit" id="submit">Занести урок в базу</button>
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