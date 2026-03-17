<?php
$a = 15;
$b = 15;
$c = 15;
echo "A: {$a}\n";
echo "B: {$b}\n";
if($a + $b < $c || $a + $c < $b || $b + $c < $a)
    {
        echo "Trojůhelník nelze sestrojit.\n";
    }
if($a == $b && $b == $c && $c == $a)
    {
        echo "Trojůhelník je rovnostranný.\n";
    }
elseif($a != $b && $b != $c && $c != $a)
    {
        echo "Trojůhelník je obecný.\n";
    }
else
    {
        echo "Trojůhelník je rovnoramenný.\n\n\n";
    }
$s = ($a + $b + $c)/2;
$obsah = sqrt($s*($s - $a)*($s - $b)*($s - $c));
echo "S = {$obsah}";