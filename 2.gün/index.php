<?php

 /* $isim = "Süleyman Emre";
$i = 0;
do{
    echo $isim . "<br>";
    $i++;
}while($i < 10); */

 /* $isim = "Merhaba Dünya";
$i = 0;
do{
    if($i == 25){
        echo $isim . "<br>";
    }
    $i++;
}while($i < 50); */

/* $i = 0;
do{
    if($i %5 == 0){
        echo $i . "<br>";
    }
    $i++;
}while($i < 50); */

/* $yas = 10;
 $dogumYili = 2010;
$hesaplananYas = 2022 - $dogumYili;

echo "Doğum yılından hesaplanan yas " . $hesaplananYas . "<br>";

if($hesaplananYas > 2004){
    echo "reşit";
}else{
    echo 18 - $hesaplananYas . " yıl sonra reşit olacaksın" . "<br>";
    echo 2022 + (18 - $hesaplananYas) . " reşit olma yılın bu";

}*/

/* $vize =  100;
$final = 40;

$donemSonuPuani = $vize * 0.3 + $final * 0.7;

if($donemSonuPuani >= 50){
    echo $donemSonuPuani . " Geçti" . "<br>";
}else {
    echo $donemSonuPuani . " Kaldı" . "<br>";
} */

/* $vize =  60;
$final = 40;

$donemSonuPuani = $vize * 0.3 + $final * 0.7;

if($donemSonuPuani >= 50){
    echo $donemSonuPuani . " Geçti" . "<br>";
}elseif($donemSonuPuani < 50 && $donemSonuPuani >= 30) {
    echo $donemSonuPuani . " Bütünlemeye kaldı" . "<br>";
}else{
    echo $donemSonuPuani . " Kaldı" . "<br>";
} */

/* $haftaninGunu = 0;

switch ($haftaninGunu) {
    case 1:
        echo "pazartesi";
        break;
    case 2:
        echo "salı";
        break;
    case 3:
        echo "çarşamba";
        break;
    case 4:
        echo "perşembe";
        break;
    case 5:
        echo "cuma";
        break;
    case 6:
        echo "cumartesi";
        break;
    case 7:
        echo "pazar";
        break;
    default:
        echo "Lütfen  1 -7 arasında bir sayı giriniz";
        break;
} */
/*
$haftaninGunleri = ["pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar"];
$hangiGun = 1;

echo $haftaninGunleri[$hangiGun - 1 ] . "<br>";

echo "<pre>";
print_r($haftaninGunleri);
echo "</pre>";

$index = array_search("çarşamba", $haftaninGunleri);
$haftaninGunleri[$index] = "Emre";

echo "<pre>";
print_r($haftaninGunleri);
echo "</pre>";

array_push($haftaninGunleri,"Karabay");

echo "<pre>";
print_r($haftaninGunleri);
echo "</pre>";

array_unshift($haftaninGunleri, "unshift");

echo "<pre>";
print_r($haftaninGunleri);
echo "</pre>";

array_pop($haftaninGunleri);

echo "<pre>";
print_r($haftaninGunleri);
echo "</pre>";

unset($haftaninGunleri[5]);

echo "<pre>";
print_r($haftaninGunleri);
echo "</pre>";

for($i = 0 ; $i < 7 ; $i++){
    echo $haftaninGunleri[$i] . "<br>";
} */
/*
$yeniDizi = array("a" => "pazartesi" ,"b" => "salı" , "c" => "çarşamba");

echo "<pre>";
print_r($yeniDizi);
echo "</pre>"; */

$ogrenciler = array(

    array( "ad" => "Emre", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre2", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman2", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay2", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre3", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman3", "soyad" => "Eskişehir", "numara" => "200","vize" => 1 , "final2" => 60),
    array( "ad" => "Karabay3", "soyad" => "Bandırma", "numara" => "300","vize" => 20 , "final2" => 70),
    array( "ad" => "Emre4", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman4", "soyad" => "Eskişehir", "numara" => "200","vize" => 50 , "final2" => 80),
    array( "ad" => "Karabay4", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre5", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman5", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay5", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre6", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman6", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay6", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre7", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman7", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay7", "soyad" => "Bandırma", "numara" => "300","vize" => 10 , "final2" => 10),
    array( "ad" => "Emre8", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman8", "soyad" => "Eskişehir", "numara" => "200","vize" => 20 , "final2" => 80),
    array( "ad" => "Karabay8", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Emre9", "soyad" => "Karabay", "numara" => "100","vize" => 10 , "final2" => 10),
    array( "ad" => "Süleyman9", "soyad" => "Eskişehir", "numara" => "200","vize" => 10 , "final2" => 10),
    array( "ad" => "Karabay9", "soyad" => "Bandırma", "numara" => "300","vize" => 10 , "final2" => 10)

);

for($i = 0 ; $i < count($ogrenciler) ; $i++){
        $donemNotu = $ogrenciler[$i]["vize"] * 0.3 +  $ogrenciler[$i]["final2"] * 0.7;

        if($donemNotu > 50 ){
            echo "Ad:".$ogrenciler[$i]["ad"]." Soyad:".$ogrenciler[$i]["soyad"]." geçti". " Donem notu ". $donemNotu . "<br/>";
        }

}


















