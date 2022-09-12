<?php

// prepare komutunun kullanımı

require "dbConnectPhp.php";

$sorguStudents = $conn->prepare("INSERT INTO ogrenciler(kimlikNumarasi,isim,soyisim,cepTelefonu,sinif,boy,kilo,yas,eposta) VALUES(:kimlikNumarasi,:isim,:soyisim, :cepTelefonu,:sinif,:boy,:kilo,:yas,:eposta)");

$sorguStudents->bindParam(':kimlikNumarasi', $kimlikNumarasi, PDO::PARAM_STR);
$sorguStudents->bindParam(':isim', $isim, PDO::PARAM_STR);
$sorguStudents->bindParam(':soyisim', $soyisim, PDO::PARAM_STR);
$sorguStudents->bindParam(':cepTelefonu', $cepTelefonu, PDO::PARAM_STR);
$sorguStudents->bindParam(':sinif', $sinif, PDO::PARAM_STR);
$sorguStudents->bindParam(':boy', $boy, PDO::PARAM_STR);
$sorguStudents->bindParam(':kilo', $kilo, PDO::PARAM_STR);
$sorguStudents->bindParam(':yas', $yas, PDO::PARAM_STR);
$sorguStudents->bindParam(':eposta', $eposta, PDO::PARAM_STR);
/*
$kimlikNumarasi = "27458694575";
$isim = "Yusuf Sefa";
$soyisim = "SEZER";
$cepTelefonu = 5342865978 ;
$sinif = 4;
$boy = 190;
$kilo = 75;
$yas = 25;
$eposta = "yusufsezer@mail.com";

$sorguStudents -> execute();
*/
$kimlikNumarasi = "12345678948";
$isim = "Mustafa";
$soyisim = "KAYA";
$cepTelefonu = 5343825957;
$sinif = 2;
$boy = 150;
$kilo = 95;
$yas = 55;
$eposta = "kayaMustafa@mail.com";

$sorguStudents->execute();


$conn = null;

