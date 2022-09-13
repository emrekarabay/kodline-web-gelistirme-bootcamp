<?php

require'dbConnectPhp.php';

$gelenID = $_POST["id"];
$gelenUsername = $_POST["username"];
$gelenPassword = $_POST["password"];

$sorguUsers = $conn->prepare(" UPDATE users SET username=? , password=? WHERE id=?");

$sorguUsers ->execute([$gelenUsername,$gelenPassword,$gelenID]);

if($sorguUsers){
    header('Location: ./table.php');
}
?>