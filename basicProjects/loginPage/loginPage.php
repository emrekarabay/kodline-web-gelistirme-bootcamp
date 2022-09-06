<?php

$servername = "localhost";
$username = "root";
$password = "";
$adminUsername = "emrekarabay10";
$adminPassword = "123456789";


try {
    $conn = new PDO("mysql:host=$servername;dbname=loginpage", $username, $password);
    // set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" . "<br>";
    $sorguDegiskeni = $conn -> query("select username,password from users");
    echo "Toplam kayıt sayısı: " . $sorguDegiskeni -> rowCount() . "<br>";
    // $ekle = $conn -> query("INSERT INTO ogrenciler(kimlikNumarasi,isim, soyisim,cepTelefonu,sinif,boy,kilo,yas,eposta) VALUES (27851227404,'Irem','Karabay',1234567891,2,160,50,20,'karabay10@gmail.com')");

    $cikti = $sorguDegiskeni->fetchall(PDO::FETCH_ASSOC);

    foreach ($cikti as $c){
        if (($c["username"] == $adminUsername) && ($c["password"] == $adminPassword)){
            echo "Giriş başarılı";
        }else{
            echo "Kullanıcı adı veya şifre yanlış";
        }
    }
    $conn = null;
} catch(PDOException $e) {
    die($e -> getMessage());
}