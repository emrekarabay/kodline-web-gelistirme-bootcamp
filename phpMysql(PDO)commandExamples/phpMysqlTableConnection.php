<?php


$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysqlkomutlari", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully" . "<br>";

    $sorguStudents = $conn->query("SELECT * FROM students");

    $readStudentsData = $sorguStudents->fetchAll(PDO::FETCH_ASSOC);

    foreach ($readStudentsData as $students) {

        $sorguStudentsScores = $conn -> query("  SELECT * FROM studentsscores WHERE studentsNo = " . $students["id"]);

        $readStudentsScoresData = $sorguStudentsScores -> fetchall();

        echo "<br>" .$students['studentName'];

        foreach($readStudentsScoresData as $scores)
        {
            echo " ortalaması = " . $scores['midtermScore'] * 0.3 + $scores['finalScore'] * 0.7 . "<br>";
        }

    }
    $conn = null;

} catch (PDOException $e) {
    die($e->getMessage());
}