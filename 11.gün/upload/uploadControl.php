<?php

$dizin = './';
$yuklenecek_dosya = $dizin . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $yuklenecek_dosya))
{
    echo "<img width='20%' height='20%' src='".$yuklenecek_dosya."'><br>";
    echo "Dosya başarıyla yüklendi.<br>";

} else {
    echo "Dosya yüklenemedi!\n";
}
?>