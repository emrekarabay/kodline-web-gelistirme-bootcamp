<?php

require'dbConnectPhp.php';

$gelenID = $_GET['id'];

ECHO $gelenID. "<br>";

$sorguUsers = $conn->prepare(" select * from users where id=?");

$sorguUsers -> execute([$gelenID]);

$usersListele = $sorguUsers -> fetch(PDO::FETCH_ASSOC);

echo "güncellenecek kaydın adı: " . $usersListele['username'];
