<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Номер</title>
</head>
<body>
    <?php
    $n = (int)$_REQUEST['n'];
    $k = (int)$_REQUEST['k'];
    $c[0] = 0;

    if ( $n > $k) {
        for ($i = 1; $i <= $n; $i++) {
            $c[$i] = (string)$i."a";
        }
    } else { echo 'N > K, такого элемента не существует!';}

    $count = count($c);

    for($i = 0; $i < $count; $i++) {
        for($j = 0; $j < $count - $i - 1; $j++) {
            if($c[$j] > $c[$j+1]) {
               $tmp = $c[$j];
               $c[$j] = $c[$j+1];
               $c[$j+1] = $tmp;
            }
         }
     }
     ?>

     <div style="font-size: 20em; text-align: center">
         <?php
         echo (array_search($k."a", $c));
         ?>
    </div>
    <div style="text-align: center; font-size: 3em">позиция элемента</div>
     
    
</body>
</html>