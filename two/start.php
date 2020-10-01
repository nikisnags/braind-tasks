<?php
$n = (int)$_REQUEST['n'];
$m = (int)$_REQUEST['m'];
$c;

if ($n%2 != 0 && $m == 0) {
    echo -1;
}

if ($n%2 == 0 && $m == 0) {
    $c = $n/2;
    echo $c;
}

if ($n == 0 && $m == 1) {
    $n = $m = 0;
    $c += 6; 
}

while ($n != 0 && $m != 0) {
    while ($n > 1) {
        $c += (int)($n/2);
        $n = $n % 2;
    }
    while ($m > 2) {
        $m -= 2;
        $n += 1;
        $c++;
    }
    /* switch ($n) {
         case 0: if ( $m == 1) {
             $n = $m = 0;
             $c += 6;
         }
     } */
     if ($n == 0 && $m == 1) {
         $n = $m =0;
         $c += 6; 
     }
     if ($n == 0 && $m == 2) {
        $n = $m = 0;
        $c += 5; 
    }
    if ($n == 1 && $m == 1) {
        $n = $m = 0;
        $c += 3; 
    }
    if ($n == 1 && $m == 2) {
        $n = $m = 0;
        $c += 2; 
    }
}

echo $c;





/*
echo " ||||| ";
echo "(int)7/2 ->";
echo (int)(7/2)."\n";
echo "3%2->";
echo 3%2."\n"; */


?>