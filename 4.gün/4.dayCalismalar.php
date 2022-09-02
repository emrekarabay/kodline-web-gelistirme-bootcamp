<?php
//  www.w3resource.com PHP arrays exercises 1
/*
$color = array('white', 'green', 'red', 'blue', 'black');

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . "<br>";
*/

//  www.w3resource.com PHP arrays exercises 2
/*
$color = array("white", "green", "red");
echo "<ul>";
foreach ($color as $c){
    echo "<li>$c</li>";
}
echo "</ul>";
sort($color);

echo "<ul>";
foreach ($color as $y) {
    echo "<li>$y</li>";
}
echo "</ul>";
?>
*/

//  www.w3resource.com PHP arrays exercises 3
/*
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $c => $value){
    echo "The capital of " . $c . " is " . $value ."<br>";
}
*/

//  www.w3resource.com PHP arrays exercises 4
/*
$x = array(1, 2, 3, 4, 5);

echo "<pre>";
print_r($x);
echo "</pre>";

array_pop($x);

echo "<pre>";
print_r($x);
echo "</pre>";

unset($x[2]);

echo "<pre>";
print_r($x);
echo "</pre>";
*/
//  www.w3resource.com PHP arrays exercises 5
/*
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
*/
//  www.w3resource.com PHP arrays exercises 6

function w3rfunction($value,$key)
{
    echo "$key : $value"."<br>";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":{ 
"Publisher": "Little Brown"
}
 }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");