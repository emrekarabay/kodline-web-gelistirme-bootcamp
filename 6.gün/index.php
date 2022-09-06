<?php
/*
$dizi = array("emre",5,"karabay",true,8);

echo "<pre>";
print_r($dizi);
echo "</pre>";

echo "<pre>";
var_dump($dizi);
echo "</pre>";

for ($i = 0; $i < 6; $i++){
    if($i == 3){
        die("i = 3 öldü");
    }
    echo $i . "<br>";
}
*/
/*
$bakiye = 50;
$toplam = 70;
try {

    if ($toplam > $bakiye){
        throw new Exception("bakiye yetersiz");

    }else {
        echo "satın alma gerçekleşti";
    }
}catch (Exception $hata){
    echo $hata -> getMessage();
};
*/
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=kodlinekurs", $username, $password);
    // set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" . "<br>";
    $sorguDegiskeni = $conn -> query("select isim,soyisim from ogrenciler");
    echo "Toplam kayıt sayısı: " . $sorguDegiskeni -> rowCount() . "<br>";
   // $ekle = $conn -> query("INSERT INTO ogrenciler(kimlikNumarasi,isim, soyisim,cepTelefonu,sinif,boy,kilo,yas,eposta) VALUES (27851227404,'Irem','Karabay',1234567891,2,160,50,20,'karabay10@gmail.com')");

    $cikti = $sorguDegiskeni->fetchall(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($cikti);
        echo "</pre>";
        foreach ($cikti as $c){
            echo $c["isim"] . "<br>";
            echo $c["soyisim"] . "<br>";
        }

    $sil = $conn -> query("DELETE from ogrenciler WHERE isim='Ahmet'");

        $cikti = $sorguDegiskeni->fetchall(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($cikti);
        echo "</pre>";
        foreach ($cikti as $c){
            echo $c["isim"] . "<br>";
            echo $c["soyisim"] . "<br>";
        }
    $conn = null;
} catch(PDOException $e) {
    die($e -> getMessage());
}

