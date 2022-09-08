<?php


// include "dbConectPhp.php";
require "dbConnectPhp.php";

$sorguStudents = $conn->query("SELECT * FROM ogrenciler");

$readStudentsData = $sorguStudents->fetchAll(PDO::FETCH_ASSOC);

foreach ($readStudentsData as $students) {

    $sorguStudentsScores = $conn->query("  SELECT * FROM ogrencimidtermfinalscores WHERE ogrenciNo = " . $students["id"]);

    $readStudentsScoresData = $sorguStudentsScores->fetchall();

    echo "<br>" . $students['isim'];

    foreach ($readStudentsScoresData as $scores) {
        $ortalama = ($scores['midterm'] * 0.3) + ($scores['finalScores'] * 0.7);
        $sorguScoreStudentNoAndStudentId = $conn->query(" SELECT * FROM ogrenciler WHERE id = " . $scores["ogrenciNo"]);

        echo $ortalama . "<br>";

        if ($ortalama < 45) {
            $sil = $conn->query("DELETE FROM ogrencimidtermfinalscores WHERE ogrenciNo = " . $scores["ogrenciNo"]);
            $sil2 = $conn->query("DELETE FROM ogrenciler WHERE id = " . $scores["ogrenciNo"]);
            echo "silindi" . $scores["ogrenciNo"];

        }
    }

}
$conn = null;

