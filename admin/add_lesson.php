<?php
   include "lock.php";
    include "blocks/bd.php";
    /*Если существует в глобальном массиве опр. ячейка то мы создаем пустую ячейку. Если она пустая, не заполненная, то мы ее уничтожаем.*/
    if (isset($_GET['title'])) {
        $title = $_GET['title'];
        if ($title == '') {
            unset($title);
        }
    }
    if (isset($_GET['meta_d'])) {
        $meta_d = $_GET['meta_d'];
         if ($meta_d == '') {
            unset($meta_d);
        }
    } 
    if (isset($_GET['meta_k'])) {
        $meta_k = $_GET['meta_k'];
        if ($meta_k == '') {
            unset($meta_k);
        }
    }
    if (isset($_GET['date'])) {
        $date = $_GET['date'];
        if ($date == '') {
            unset($date);
        }
    }
    if (isset($_GET['description'])) {
        $description = $_GET['description'];
        if ($description == '') {
            unset($description);
        }
    }
    if (isset($_GET['text'])) {
        $text = $_GET['text'];
         if ($text == '') {
            unset($text);
        }
    } 
    if (isset($_GET['author'])) {
        $author = $_GET['author'];
         if ($author == '') {
            unset($author);
        }
    }
?>
<!DOCTYPE html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Обработчик</title>
       
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
                    if (isset($title) && isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text) && isset($author)) {
                        $result = mysqli_query($bd, "INSERT INTO lessons (title,meta_d,meta_k,date,description,text,author) VALUES('$title','$meta_d','$meta_k','$date','$description','$text','$author')");
                        if ($result == 'true' ) {
                            echo "<p>Ваш урок успешно добавлен</p>";
                        }
                        else{
                             echo "<p>Ваш урок не добавлен</p>";
                        }
                    } 
                    else {
                        echo "<p>Вы ввели не всю информацию</p>";
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