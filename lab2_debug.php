<?php

//php .\lab2_debug.php

function sum(array $x, int $N): int
{
    $s = 0;
    for ($i = 0; $i < $N; $i++) {
        $s += $x[$i];
    }
    return $s;
}

function ReadInt(string $prompt)
{
    print_r($prompt);//выводит инфо
    echo "Введите число: ";
    $handle = fopen("php://stdin", "r");
    $x = (integer)trim(fgets($handle));
    return $x;
}

function Main()
{
    $N = 10;
    $a = [1, 3, -5, 0, 4, 6, -1, 9, 3, 2];

    $m = $a[0];
    for ($i = 1; $i < $N; $i++) {
        if ($m < $a[$i]) {
            $m = $a[$i];
        }
    }
    print_r($m);

    $s = sum($a, $N);
    print_r($s);

    $z = $s / $m;

    $k = 0;
    for ($i = 0; $i < $N; $i++) {
        if ($a[$i] > $z) {
            $k += $a[$i];
        } else {
            $k -= $a[$i];
        }
    }
    print_r($k); //выводит инфо $k

    $x = ReadInt("");
    $y = ReadInt("");

    $s = 0;
    while (($x != 0) && ($y != 0)) {
        $x--;
        $y--;
        $s += $x + $y;
    }
    print_r($s); //выводит инфо $s
}

Main();
