<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysqlkomutlari", $username, $password);

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully" . "<br>";

    $sorguStudents = $conn -> query("SELECT * FROM students");

    $readStudentsData = $sorguStudents -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($readStudentsData as $readDatarow){
        echo $readDatarow["studentName"] . " " . $readDatarow["surname"] . "<br>";
    }

    $conn  = null;

} catch(PDOException $e) {
    die($e -> getMessage());
}