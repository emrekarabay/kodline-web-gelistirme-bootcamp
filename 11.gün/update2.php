<?php

require'dbConnectPhp.php';

$gelenID = $_POST["id"];

$yuklenecek_dosya = basename($_FILES['file']['name']);

echo $yuklenecek_dosya;

$sorguUsers = $conn->prepare(" UPDATE users SET photoAdress = ? WHERE id=?");

$sorguUsers ->execute([$yuklenecek_dosya,$gelenID]);


/*
if($sorguUsers){
    header('Location: ./table.php');
}*/
?>