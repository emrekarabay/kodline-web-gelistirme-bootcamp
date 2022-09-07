<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysqlkomutlari", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully" . "<br>";

    $sorguStudents = $conn->query("SELECT * FROM students");

    $sorguStudentsScores = $conn -> query("SELECT studentsNo FROM studentsscores ") ;

    $readStudentsScoresData = $sorguStudentsScores -> fetchAll();

    foreach ($readStudentsScoresData as $scores){
        $sorguScoreStudentNoAndStudentId = $conn -> query(" SELECT * FROM students WHERE id = " . $scores["studentsNo"]);
        if($sorguScoreStudentNoAndStudentId -> rowCount() == 0){
            $sil = $conn -> query("DELETE FROM studentsscores WHERE studentsNo = " . $scores["studentsNo"] );
        }
    }

    $conn = null;

} catch (PDOException $e) {
    die($e->getMessage());
}