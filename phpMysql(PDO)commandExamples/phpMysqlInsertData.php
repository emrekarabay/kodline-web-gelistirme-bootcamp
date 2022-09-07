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

    foreach ($readStudentsData as $readDatarow) {
        echo $readDatarow["studentName"] . " " . $readDatarow["surname"] . "<br>";
    }
    
    $addData = $conn -> query("INSERT INTO students(studentName,surname,identificationNumber,age) VALUES ('Mustafa','Karabay',12586479375,52)");

    $conn = null;

} catch (PDOException $e) {
    die($e->getMessage());
}