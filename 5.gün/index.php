<?php
/*
date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s' , time())."<br>";
echo time()."<br>";
*/
// sa dk sn ay gün yıl
/*
$yıl=2022;
$ay=9;
$gun=1;
$sn=50;
$dk=30;
$sa=3;
//echo mktime($sa , $dk , $sn , $gun , $ay , $yıl )."<br>";
//echo time();
date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s', mktime($sa-29 , $dk , $sn , $ay , $gun , $yıl ))."<br>";
*/
// bir önceki gün yaptık ve -5 saat .
// doğ gün kaç sn yaşadık+kaçgün+kaçyıl
/*
date_default_timezone_set('europe/istanbul');
echo date('d-m-Y H:i:s' , time())."<br>";
$birtday =  mktime(20,40,10,10,19,1999);
echo "birtday : " . $birtday . "<br>";
$today = time();
echo  "today : " . $today . "<br>";
$diff_days = ($today - $birtday);
$days = ($diff_days/86400);
echo $days ." kadar gün yaşadın!"."<br>";
$ay = ($days / 30);
echo $ay ." kadar ay yaşadın!"."<br>";
$yil = ($days / 365);
echo $yil." kadar yıl yaşadın!"."<br>";

$year = (int)($days / 365) ;

$diffDay = $days - ($year * 365);

$mounth = (int)($diffDay / 30) ;

$diffDay = $diffDay - ($mounth * 30);

$diffSeconds = ($diffDay - (int)($diffDay)) * 24 * 60 * 60 ;

$hours = (int)($diffSeconds/3600);

$diffSeconds = $diffSeconds - ($hours * 3600);

$minute = (int)($diffSeconds/60);

$diffSeconds = $diffSeconds - ($minute * 60);

$seconds = (int)($diffSeconds);
echo $year . " yıl " . $mounth . " ay " . (int)$diffDay . " gün " . $hours . " saat " . $minute . " dakika " . $seconds . " saniyedir yaşıyor ";
*/

$ingilizce = array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");
$turkce = array("pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");

for ($i = 1999; $i < 2023; $i++){
    echo str_replace($ingilizce,$turkce,date("d m y l",strtotime("19 october ". $i)))."<br>";
}
