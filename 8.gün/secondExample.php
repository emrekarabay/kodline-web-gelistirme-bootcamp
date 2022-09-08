<?php

// include "dbConectPhp.php";
require "dbConnectPhp.php";

$sorguStudents = $conn -> query("SELECT * FROM ogrenciler");

$readStudentsData = $sorguStudents->fetchAll(PDO::FETCH_ASSOC);

foreach ($readStudentsData as $students) {

    $sorguStudentsScores = $conn -> query("  SELECT * FROM ogrencimidtermfinalscores WHERE ogrenciNo = " . $students["id"]);

    $readStudentsScoresData = $sorguStudentsScores -> fetchall();

    foreach($readStudentsScoresData as $scores)
    {

        $ortalama = ($scores['midterm'] * 0.3) + ($scores['finalScores'] * 0.7);
        $sorguScoreStudentNoAndStudentId = $conn -> query(" SELECT * FROM ogrenciler WHERE id = " . $scores["ogrenciNo"]);
        echo  $students['isim'] . " " . $students['soyisim']  .  " ortalama: " . $ortalama . " donem: " . $scores["sinavDonemi"] . "<br>";

        $midtermAdd = rand(0,100);
        $finalAdd = rand(0,100);
        $butunlemeAdd = rand(0,100);
        $ogrenciNumarasi  = $scores["ogrenciNo"];
        $addData = $conn -> query("INSERT INTO ogrencimidtermfinalscores(ogrenciNo,midterm,finalScores,butunleme,sinavDonemi) VALUES ($ogrenciNumarasi,$midtermAdd,$finalAdd,$butunlemeAdd,'2022/1')");
    }

}
$conn = null;

