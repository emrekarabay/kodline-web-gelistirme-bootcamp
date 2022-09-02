<?php



/* for($i = 0; $i <= 10; $i++){
    for($j = 0; $j <= 10; $j++){
        echo $i . " x " . $j . " = " . $i * $j . "<br>";
    }
    echo "<br>";
} */



/*
$dizi1 = [5,4,8,2,10,95,84,20,75,15];
$dizi2 = [15,75,2,50,51,52,53,54,55,56,10,95];
$a = 0;
for($i = 0; $i < count($dizi1); $i++) {
    for ($j = 0; $j < count($dizi2); $j++) {
        if ($dizi1[$i] == $dizi2[$j]) {
            $a++;
            echo $dizi1[$i] ." - " .$dizi2[$j]. "<br>";
        }
    }
}

echo $a . " tane aynı" . "<br>";
*/
/*
$time = 30;
$sum = 30;

for($i = 0; $i < 49; $i++){
    $time += 5;
    $sum += $time;
}
echo "<br>" . $sum;
*/

$dizi = array();
$count =0;

for($i = 0; $i < 100; $i++){
    $dizi[] = $i;
}

for($i = 100; $i >= 0; $i--){
    $dizi[] = $i;
}

for($i = 0; $i < count($dizi); $i++){
    for($j = $i +1; $j < count($dizi); $j++){
        if($dizi[$i] != $j){
            if($dizi[$i] == $dizi[$j]){
                $count++;
            }
        }
    }
}

if($count > 0) {
    echo $count . " tane benzer var";
}else {
    echo "benzer yok";
}









