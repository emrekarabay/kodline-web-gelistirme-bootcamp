<?php

require'dbConnectPhp.php';

$gelenID = $_POST["id"];

$yuklenecek_dosya = basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $yuklenecek_dosya);

$sorguUsers = $conn->prepare(" UPDATE users SET photoAdress = ? WHERE id=?");

$sorguUsers ->execute([$yuklenecek_dosya,$gelenID]);

if($sorguUsers){
    header('Location: ./adminPanel.php?idd='.$gelenID);
}
?>