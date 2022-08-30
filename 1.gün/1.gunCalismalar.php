<?php

// Problem 1

/* $toplam = 0;

for ($i = 0 ; $i < 1000; $i++){
    if($i %3 == 0 || $i %5 == 0){
        $toplam += $i;
    }
}
echo $toplam; */

/* Problem 2

$sum  = 0;
$old1 = 0;
$old2 = 1;

for ($i = 1 ; $i < 4000000 ; $i++){
    $i = $old1 + $old2;
    $old1 = $old2;
    $old2 = $i;

    if($i %2 == 0) {
        $sum += $i;
    }
}

echo $sum; */

/* Problem 6

$sumOfTheSquare = 0;
$squareOfTheSum = 0;

for ($i = 1 ; $i <= 100 ; $i++){
    $sumOfTheSquare += $i ** 2;
}

for ($i = 1 ; $i <= 100 ; $i++){
    $squareOfTheSum += $i;
}
$squareOfTheSum = $squareOfTheSum ** 2;

echo $squareOfTheSum - $sumOfTheSquare; */

/* Problem 5

$i=1;
while(true){
    if($i %20 == 0 && $i %19 == 0 && $i %18 == 0 && $i %17 == 0 && $i %16 == 0 && $i %15 == 0 && $i %14 == 0 && $i %13 == 0 && $i %12 == 0 && $i %11 == 0 && $i %10 == 0 && $i %9 == 0 && $i %8 == 0 && $i %7 == 0 && $i %6 == 0 && $i %5 == 0 && $i %4 == 0 && $i %3 == 0 && $i %2 == 0){
        echo $i;
        break;
    }
    $i++;

} */

/* Problem 3

$count = 0;
$number = 600851475143;
for($i = 13194; $i > 1; $i--){
    if($number %$i == 0) {
        for($j = 2; $j < $i; $j++){
            if($i %$j == 0){
                $count++;
                break;
            }
        }
        if($count == 0){
            echo $i . "<br>";
        }
        else {
            $count = 0;
        }

    }

} */

/* Problem 16

$number = 100;
$result = 1;
$rem = 0;
$sum = 0;

for ($i = 1; $i <= $number;$i++) {
    $result *= $i;
}

for($i = 0; $i < strlen($result); $i++) {
    $rem = $result %10;
    $sum += $rem;
    $result = $result/10;
}
echo $sum; */

