<?php

$link= baglan("https://www.bauntek.com.tr/",0);
preg_match('@img src="(.*?)"@', $link,$resimadresi);
print_r($resimadresi);

$resimadresi[1]= $resimadresi[1];


$link= baglan($resimadresi[1],1);
function baglan($a,$b)
{

    $c = curl_init();
    curl_setopt($c,CURLOPT_URL,$a);
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($c,CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($c,CURLOPT_SSL_VERIFYPEER, false);

    if ($b=="1") {
        $dosya = fopen("photos/" . date("d.m.y h.i.s") . ".jpg", "w");
        curl_setopt($c, CURLOPT_FILE, $dosya);
    }

    $kaydet = curl_exec($c);
    curl_close($c);
    return $kaydet;

}