<?php

$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=kodlinekurs", $username, $password);
    // set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully" . "<br>";
    $ogrenciSorguDegiskeni = $conn -> query("  select * from ogrenciler");


    //echo "Toplam kayıt sayısı: " . $sorguDegiskeni -> rowCount() . "<br>";
   // $ekle = $conn -> query("INSERT INTO ogrenciler(kimlikNumarasi,isim, soyisim,cepTelefonu,sinif,boy,kilo,yas,eposta) VALUES (27851227404,'Irem','Karabay',1234567891,2,160,50,20,'karabay10@gmail.com')");
/*
    $tableCreate = $conn ->query("CREATE TABLE ogrenciMidtermFinalScores (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    ogrenciNo INT,
    midterm VARCHAR(3),
    finalScores VARCHAR(3),
    butunleme VARCHAR(3),
    sinavDonemi VARCHAR(6)
    )");
*/
/*
    $insertScores = $conn -> query("INSERT into ogrenciMidtermFinalScores(ogrenciNo,midterm,finalScores,butunleme,sinavDonemi) values('1','70','50','30','2022/2')");
$insertScores = $conn -> query("INSERT into ogrenciMidtermFinalScores(ogrenciNo,midterm,finalScores,butunleme,sinavDonemi) values('6','80','90','40','2022/2')");
*/

    $ogreniliste = $ogrenciSorguDegiskeni->fetchall();




    foreach ($ogreniliste as $ogrenci) {

        $notlarSorguDegiskeni = $conn -> query("  select * from ogrencimidtermfinalscores WHERE ogrenciNo = " . $ogrenci["id"]);

        $notlarlistele = $notlarSorguDegiskeni->fetchall();
        echo "<br>" .$ogrenci['isim'];
            foreach($notlarlistele as $notlar)
            {
                echo "ogrencinin ortalaması= ".$notlar['sinavDonemi']." döneminde " .$notlar['midterm']*0.3+$notlar['finalScores']*0.7."<br>";


                }

            }
    $sorguNotlar = $conn -> query("SELECT ogrenciNo FROM ogrencimidtermfinalscores ") ;
    $notlariListele = $sorguNotlar -> fetchAll();
    foreach ($notlariListele as $notlar){
        $sorgula = $conn -> query(" SELECT * FROM ogrenciler WHERE id = " . $notlar["ogrenciNo"]);
        if($sorgula -> rowCount() == 0){
            $sil = $conn -> query("DELETE FROM ogrencimidtermfinalscores WHERE ogrenciNo = " . $notlar["ogrenciNo"] );
        }
    }

} catch(PDOException $e) {
    die($e -> getMessage());
}

