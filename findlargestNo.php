<?php
#largest number form 3 number
$a = 10;
$b = 5;
$c = 3;

if($a>$b && $a > $c)
    echo " $a is largest number";
elseif($b > $a && $b>$c)
    echo "$b is largest number";
else
    echo "$c is largest number";
?>