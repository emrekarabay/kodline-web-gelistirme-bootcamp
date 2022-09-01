<?php

 /* $yilinAylari = ["1" => "ocak", "2" =>"şubat", "3" => "mart"];

foreach ($yilinAylari as $index => $aylar) {
   echo $index. " => " . $aylar . "<br>";
} */

/* function writeMsg() {
    echo "Hello world!";
}

writeMsg(); */

/* function sum($a,$b){
    echo $a + $b . "<br>";
}
function subs($a,$b){
    echo $a - $b . "<br>";
}
function multiply($a,$b){
    echo $a * $b . "<br>";
}*/
 /* function division($a,$b){
    return $a / $b;
}

$x = 5;
$y = 10;
// $globalSayi  = 50;
// $yeniSayi = 100;
// echo $yeniSayi . "<br>";
// sum($x,$y);
// subs($x,$y);
// multiply($x,$y);
$divisionReturn  = division($x,$y);

echo $divisionReturn . "<br>";
 */
/*
function ortHesapla($x,$y){

        $donemNotu = $x * 0.3 +  $y * 0.7;
        return $donemNotu;
}

$ogrenciler = array(
    array( "ad" => "Emre", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Süleyman", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
    array( "ad" => "Karabay", "soyad" => "Bandırma", "numara" => "300","vize" => 30 , "final2" => 70),
    array( "ad" => "Ali", "soyad" => "Karabay", "numara" => "100","vize" => 50 , "final2" => 60),
    array( "ad" => "Veli", "soyad" => "Eskişehir", "numara" => "200","vize" => 40 , "final2" => 80),
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
echo "Geçenler" . "<br>";

for($i = 0 ; $i < count($ogrenciler) ; $i++){
    $donemNotu = ortHesapla($ogrenciler[$i]["vize"],$ogrenciler[$i]["final2"]);

    if($donemNotu >= 50 ){
        echo "Ad: ".$ogrenciler[$i]["ad"]." Soyad: ".$ogrenciler[$i]["soyad"]. " Donem notu: ". $donemNotu . " Geçti " . "<br/>";
    }
}
foreach ($ogrenciler as $m) {
    $donemNotu = ortHesapla($m["vize"],$m["final2"]);

    if($donemNotu >= 50 ){
        echo "Ad: ".$m["ad"]." Soyad: ".$m["soyad"]. " Donem notu: ". $donemNotu . " Geçti " . "<br/>";
    }

}

echo "Kalanlar" . "<br>";

for($i = 0 ; $i < count($ogrenciler) ; $i++){
    $donemNotu = ortHesapla($ogrenciler[$i]["vize"],$ogrenciler[$i]["final2"]);

    if($donemNotu < 50 ){
        echo "Ad: ".$ogrenciler[$i]["ad"]." Soyad: ".$ogrenciler[$i]["soyad"]. " Donem notu: ". $donemNotu . " Kaldı " . "<br/>";
    }
}

$x = in_array("Karabay",$ogrenciler[0]);
if($x){
    echo "bulundu". "<br>";
}
else{
    echo "Bulunamadı";
}

$rakamlar = [1,5,9,8,74,61,9,1,52,58];

$harfler = ["a","k","a","r","t","z"];

echo "<pre>";
print_r($rakamlar);

sort($rakamlar);

print_r($rakamlar);

rsort($rakamlar);

print_r($rakamlar);

arsort($rakamlar);

print_r($rakamlar);

print_r($harfler);

sort($harfler);

print_r($harfler);



array_push($rakamlar, 25);

print_r($rakamlar);

echo "</pre>";


echo rand(5,10); */

$dizi = ["elma","armut","poğaça","çorba","kola","ayran","meyve suyu","simit","su","pilav","bisküvi","makarna"];
$istedigimYemek = "çorba";
$can = 11;
$count = 0;
while(true){
    $tahminSayisi = rand(0,11);
    if($istedigimYemek == $dizi[$tahminSayisi]){
        echo "bulunan " . $dizi[$tahminSayisi] . "<br>";
        break;
    }
    if($can == 0) {
        echo "Kaybettiniz". "<br>";
    }
    $count++;
    $can--;

}
echo " " . $count . " defada bulundu";
