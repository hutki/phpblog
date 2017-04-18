<?php
    include "lock.php";
    include "blocks/bd.php";
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
                    if (isset($id)) {
                        $result = mysqli_query($bd, "DELETE FROM lessons WHERE id='$id'");
                        if ($result == 'true' ) {
                            echo "<p>Ваш урок успешно удален!</p>";
                        }
                        else{
                             echo "<p>Ваш урок не удален</p>";
                        }
                    } 
                    else {
                        echo "<p>Вы запустили данный файл без параметра id, поэтому удалить урок не возможно</p>";
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