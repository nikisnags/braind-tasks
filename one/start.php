<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Превью текста</title>
</head>
<body>
    <?php
    $articleText = $_REQUEST['t'];
    $articleLink = "page2.php?t=$articleText";
    $articlePreview = mb_substr($articleText,0,200,'UTF-8');
    $articlePreview = $articlePreview . "...";
    $pieces = explode(" ", $articlePreview);  //array
    $a = count($pieces);

    for ($i = $a; $i >= $a - 3; $i--) {
        $pieces[$i] = "<a href='$articleLink'>" . $pieces[$i] . "</a>";
    }
    
    $articlePreview = implode(" ", $pieces);
    ?>
    
    <div style="width: 50%; text-align: center; margin: 0 auto;">

    <?php
    echo $articlePreview;
    ?>
    
</div>
</body>
</html>
