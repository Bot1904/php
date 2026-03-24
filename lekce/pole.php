<?php
$a = 10;
$b = 150;
$liche = 0;
$oguri = 0;
for( $i = $a; $i <= $b; $i++)
    {
        if( $i % 2 == 1)
            {
                $liche += 1;
            }
        if( $i % 10 == 1 || $i % 10 == 7)
            {
                $oguri += 1;
            }
        if( $i <= 1000 && $i % 5 == 0 && $i < 500 && $i >= 100)
            {
                $pole[] = $i;
            }
    }
echo "V poli je $liche lichých čísel.\n";
echo "V poli je $oguri čísel končících 1 nebo 7.\n";
foreach( $pole as $cap)
    {
        echo "$cap\n";
    }