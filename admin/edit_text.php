<?php
    include "lock.php";
    include("blocks/bd.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Страница редактирования текстов</title>
       
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
                        $result = mysqli_query($bd, "SELECT title,id FROM settings");
                        $myrow = mysqli_fetch_array($result);
                    do{
                        printf("<p><a href='edit_text.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
                }
                while ($myrow = mysqli_fetch_array($result));
                }
else{

$result = mysqli_query($bd, "SELECT * FROM settings WHERE id='$id'");
$myrow = mysqli_fetch_array($result);   
print <<<HERE
                <form name="form1" action="update_text.php" method="post">
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
                        <label>Введите текст
                         <br>
                            <textarea type="text" name="text" id="text" cols="40" rows="20">$myrow[text]</textarea>
                        </label>
                    </p>
                    
                    <input name="id" type="hidden" value="$myrow[id]">
                    <button type="submit" name="submit" id="submit">Внести изменения на страницу</button>
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