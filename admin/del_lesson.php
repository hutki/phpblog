<?php
    include "lock.php";
    include("blocks/bd.php");
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Страница удаления</title>
       
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
            <h2>Выбирите урок для удаления</h2>
              <form action="drop_lesson.php" method="post">
                <?php
                    $result = mysqli_query($bd, "SELECT title,id FROM lessons");
                    $myrow = mysqli_fetch_array($result);
                    do{
                        printf("<p><input name='id' type='radio' value='%s'><label>%s</label</p>",$myrow["id"],$myrow["title"]);
                }
                while ($myrow = mysqli_fetch_array($result));
               
                ?>
                <p><button type="submit" name="submit" id="submit">Удалить урок</button></p>
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