<?php
    include "lock.php";
    include "blocks/bd.php";
    /*Если существует в глобальном массиве опр. ячейка то мы создаем пустую ячейку. Если она пустая, не заполненная, то мы ее уничтожаем.*/
    if (isset($_POST['title'])) {
        $title = $_POST['title'];
        if ($title == '') {
            unset($title);
        }
    }
    if (isset($_POST['meta_d'])) {
        $meta_d = $_POST['meta_d'];
         if ($meta_d == '') {
            unset($meta_d);
        }
    } 
    if (isset($_POST['meta_k'])) {
        $meta_k = $_POST['meta_k'];
        if ($meta_k == '') {
            unset($meta_k);
        }
    }
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
        if ($date == '') {
            unset($date);
        }
    }
    if (isset($_POST['description'])) {
        $description = $_POST['description'];
        if ($description == '') {
            unset($description);
        }
    }
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
         if ($text == '') {
            unset($text);
        }
    } 
    if (isset($_POST['author'])) {
        $author = $_POST['author'];
         if ($author == '') {
            unset($author);
        }
    }
      if (isset($_POST['id'])) {
        $id = $_POST['id'];
       
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
                        $result = mysqli_query($bd, "UPDATE lessons SET title='$title',meta_d='$meta_d', meta_k='$meta_k', date='$date', description='$description', text='$text', author='$author' WHERE id='$id'");
                        if ($result == 'true' ) {
                            echo "<p>Ваш урок успешно обновлен!</p>";
                        }
                        else{
                             echo "<p>Ваш урок не обновлен</p>";
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