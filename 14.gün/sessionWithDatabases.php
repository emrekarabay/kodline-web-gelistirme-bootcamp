<?php

require "dbConnectPhp.php";
/*
session_start();
//$_SESSION["login"] = "emre";

echo $_SESSION["login"];
*/

//setcookie("kullanici","süleyman emre",time()+(86400*30));
//setcookie("sifre","123456",time()+(86400*30));

echo $_COOKIE["kullanici"] . "<br>";
if(isset($_COOKIE["sifre"])){
    echo $_COOKIE["sifre"] .  "<br>";
    echo "en son " . $_COOKIE["time"] . " tarihinde  girdiniz" . "<br>";
}
setcookie("time",date("Y-m-d H:i:s"),time()+(86400*30));

$sorgu=$conn->prepare("INSERT INTO sessionandcookies (oldTime) values(?)");
$sorgu->execute([$_COOKIE["time"]]);

$sorguUsers = $conn->query(" select * from sessionandcookies ");

$usersListele = $sorguUsers -> fetch();

echo "veritabanından gelen giriş ".$usersListele['oldTime'];
