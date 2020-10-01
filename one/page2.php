<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Полный текст</title>
</head>
<body>
    <?php 
    $articleText = $_REQUEST['t']; 
    ?> 
    <div style="width: 50%; text-align: center; margin: 0 auto;">
        <?php
        echo $articleText;
        ?>
    </div> 
</body>
</html>
