<?php
require "dbConnectPhp.php";
$link = baglan("https://www.letgo.com/", 0);
preg_match_all('@data-aut-id="itemTitle">(.*?)</span>@', $link, $resimadresi);
preg_match_all('@><img src="https://apollo(.*?)" alt@', $link, $resimadresi2);

// $resimadresi[1] = "http://www.balikesir.edu.tr/" . $resimadresi[1];

echo "<pre>";
print_r($resimadresi);
echo "</pre>";
echo "<pre>";
print_r($resimadresi2);
echo "</pre>";


    for ($i = 0;$i < 20; $i++){
        echo $resimadresi[1][$i] . "<br>";
        $x = $resimadresi2[1][$i];
        echo "<img src='https://apollo$x'>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

    }



// $link = baglan($resimadresi[1], 1);

function baglan($a, $b)
{

    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $a);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_TIMEOUT, 10);
    /*
        if ($b == "1") {
            $dosya = fopen("photos/" . date("d.m.y h.i.s") . ".jpg", "w");
            curl_setopt($c, CURLOPT_FILE, $dosya);
        }
    */
    $kaydet = curl_exec($c);
    curl_close($c);
    return $kaydet;
}

for ($i=0; $i<20 ;$i++) {
    $sorgu=$conn->prepare("INSERT INTO caldiklarim (baslik,url) values(?,?)");
    $x = "https://apollo" . $resimadresi2[1][$i];
    $sorgu->execute([$resimadresi[1][$i],$x]);
}

?>
