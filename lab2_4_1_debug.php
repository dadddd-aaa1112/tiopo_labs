<?php

//php .\lab2_4_1_debug.php


function sqr(int $x)
{ //10
    $q = $x * $x; //11
    return $q; //12
}


function Main()
{
    //0
    $N = 10; //1
    $a = [5, 2, 7, -9, 4, 8, -1, 0, 3, 6]; //2

    //Найдем сумму квадратов //3
    //положительных элементов массива //4
    $s = 0; //5
    for ($i = 0; $i < $N; $i++) //6
        if ($a[$i] > 0) {
            $s += sqr($a[$i]);//7
        }

    print_r("Сумма квадратов равна:" . $s); //8
} //9

Main();
