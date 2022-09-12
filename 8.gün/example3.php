<?php
require'dbconnectPhp.php';
$sorgunotlar= $conn->query("  select * from ogrencimidtermfinalscores ");
$notlarlistele=$sorgunotlar->fetchall();
$sorgubilgiler= $conn->query("  select * from ogrenciler ");
$bilgilerlistele=$sorgubilgiler->fetchall();

foreach ($bilgilerlistele as $bilgiler) {
    # code...

    foreach ($notlarlistele as  $notlar) {

        if($notlar['ogrenciNo']==$bilgiler['id']){
            if($notlar['sinavDonemi']=="2021/2"){
                $ortalama1[]=$notlar['midterm']*0.3+$notlar['finalScores']*0.7;
            }

            if($notlar['sinavDonemi']=="2022.0"){
                $ortalama2[]=$notlar['midterm']*0.3+$notlar['finalScores']*0.7;
            }
        }

    }
}

for ($i=0; $i <count($ortalama2) ; $i++) {
    if ($ortalama2[$i]>($ortalama1[$i]+$ortalama1[$i]*0.20)) {


        $sorgubilgiler1=$conn->query("  select * from ogrenciler ");
        $bilgilerlistele1=$sorgubilgiler1->fetch((PDO::FETCH_NUM));



        echo "kopyacı eleman ".$bilgilerlistele1[$i+1]." ortalaması birinci dönem= ".$ortalama1[$i]." ".$bilgilerlistele1[$i+1]. " ın ortalaması ikinci dönem= ".$ortalama2[$i]."<br>";

    }


}
?>