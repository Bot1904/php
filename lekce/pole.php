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


$kys = "matyas";
$UMA = ["Oguri", "special week", "Golden City", "Verxina", "Nice Nature"];
foreach ($UMA as $mambo)
    {
        echo "$mambo \n";
    }
$Satella = [1, 40, 67, 86, 77, 63 , 54, 17, 47];
$sedum = 0;
for($i = 1; $i < count($Satella); $i++)
    {
        if ($Satella[$i] % 10 == 7)
            $sedum++;
        echo("$Satella[$i]\n");
        

    }
echo "$sedum";
for($i = 0; $i < count($Satella); $i++)
    {
        if($Satella[$i] > 55)
            {
                echo "$Satella[$i]" . ",\n";
            }
    }

for($i = 0; $i < count($Satella); $i++)
    {
        if($Satella[$i] % 2 == 0)
            echo " suda $Satella[$i], ";
    }
for($i = 0; $i < count($Satella); $i++)
    {
        if($Satella[$i] % 2 == 1)
            echo " licha $Satella[$i], ";
    }