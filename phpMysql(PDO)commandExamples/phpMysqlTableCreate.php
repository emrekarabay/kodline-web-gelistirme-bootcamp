<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysqlkomutlari", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully" . "<br>";

    $sorguStudents = $conn->query("SELECT * FROM students");

    $tableCreate = $conn ->query("CREATE TABLE denemeTable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    ogrenciNo INT,
    midterm VARCHAR(3),
    finalScores VARCHAR(3),
    butunleme VARCHAR(3),
    sinavDonemi VARCHAR(6)
    )");

    echo "Table MyGuests created successfully";

    $conn = null;
} catch (PDOException $e) {
    die($e->getMessage());
    echo $tableCreate . "<br>" . $e->getMessage();
}
