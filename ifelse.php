<?php
$eng = 40;
$sci = 40;
$math = 40;

$total = $eng + $sci +$math /3;

if($total >=90)
    echo " A+ Total marks ".$total;
elseif($total >=75)
    echo " B+ Total marks ". $total;
else
    echo "c+ Total marks ".$total;
?>