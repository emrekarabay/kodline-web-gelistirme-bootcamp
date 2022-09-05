<?php
// question 1
/*
date_default_timezone_set('europe/istanbul');
echo date('Y' , time())."<br>";
*/
/*
echo date('Y');
*/

// question 2
/*
date_default_timezone_set('europe/istanbul');

$birtday = mktime(0,0,0,10,19,1999);
$today = time();
$diffDays = ($birtday - $today);
$days = abs((int)($diffDays/86400));
echo "next birtday: " . $days . "days". "<br>";
*/

// question 3
/*
date_default_timezone_set('europe/istanbul');

$today = date("Y/m/d",time());
echo $today . "<br>";
$today = date("Y.m.d",time());
echo $today . "<br>";
$today = date("d-m-Y",time());
echo $today . "<br>";
*/

// question 4
/*
date_default_timezone_set('europe/istanbul');

$firstYear = "1981-11-04";
$secondYear = "2013-09-04";

$diff = abs(strtotime($secondYear)- strtotime($firstYear));

$years = floor($diff / (365*24*60*60));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

echo "$years years, $months months, $days days" . "<br>";
*/

// question 5
/*
date_default_timezone_set('europe/istanbul');

$date = "2012-09-12";
$newDate = date("d-m-Y",strtotime($date));
echo $newDate . "<br>";
*/

// question 6
/*
date_default_timezone_set('europe/istanbul');

$date = "12-05-2014";
$timestampOfDate = strtotime($date);
echo $timestampOfDate . "<br>";
$timestampOfDate = mktime(0,0,0,05,12,2014);
echo $timestampOfDate . "<br>";
*/

// question 7
/*
date_default_timezone_set('europe/istanbul');

$firstDay = "25-10-1985";
$secondDay = "23-10-1985";

$firstTimestampOfDate = strtotime($firstDay);
$secondTimestampOfDate = strtotime($secondDay);
$newDate = ($firstTimestampOfDate/(60*60*24)) - ($secondTimestampOfDate/((60*60*24)));
echo $newDate . "<br>";
*/

// question 8
/*
date_default_timezone_set('europe/istanbul');

$date = "2022-09-05";

echo "First day: " . date("Y-m-01",strtotime($date)) . " - Last day: " . date("Y-m-t",strtotime($date));
*/

// question 9
/*
date_default_timezone_set('europe/istanbul');

$date = "2022-09-05";

echo date('l \t\h\e jS',strtotime($date));
*/

// question 10
/*
var_dump — Bir değişkenle ilgili bilgiyi dökümler
checkdate — Miladi tarihi doğrular

var_dump(checkdate(2, 30, 2008));
var_dump(checkdate(2, 29, 2008));
*/






