<?php

//php .\lab3_debug.php

function SumPositive(array $a):int
{
    $sum = 0; //1
    for ($i = 0; //2
         $i < count($a); //3
         $i++) //4
    {
        if ($a[$i] > 0) //5
        {
            $sum += $a[$i]; //6
        }
    }
    return $sum; //7
}

print_r(SumPositive([2, 4, 3, 8, 10]));
