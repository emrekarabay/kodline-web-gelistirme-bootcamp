<?php
require "dbConnectPhp.php";

$link = baglan("https://www.letgo.com/");
preg_match_all('@data-aut-id="itemTitle">(.*?)</span>@', $link, $urlArray);
preg_match_all('@><img src="https://apollo(.*?)" alt@', $link, $imgArray);

function baglan($a)
{

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $a);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_TIMEOUT, 10);

    $kaydet = curl_exec($c);
    curl_close($c);
    return $kaydet;
}

for ($i=0; $i<count($urlArray) ;$i++) {
    $sorgu=$conn->prepare("INSERT INTO caldiklarim (baslik,url) values(?,?)");
    $x = "https://apollo" . $imgArray[1][$i];
    $sorgu->execute([$urlArray[1][$i],$x]);
}

header('Location: ./curlTable.php');

