<?php

require 'dbConnectPhp.php';

$gelenID = $_GET["deleteID"];
$photoAdressNew = "";

$sorguUsers = $conn->prepare(" UPDATE users SET photoAdress = ? WHERE id=?");

$sorguUsers->execute([$photoAdressNew,$gelenID]);

if ($sorguUsers) {
    header('Location: ./table.php');
}



