<?php

require "dbConnectPhp.php";

$gelenUsername = $_POST["username"];
$gelenPassword = $_POST["password"];
$gelenConfirmPassword = $_POST["confirmPassword"];

$sorguUsers = $conn->prepare(" INSERT INTO users SET username=?,password=?,authLevel=?,activationCode=?");

if($gelenPassword == $gelenConfirmPassword){
    $_SESSION["username"] = $gelenUsername;
    $activationCode = rand(100,999);
    $sorguUsers ->execute([$gelenUsername,$gelenPassword,"0",$activationCode]);
    header('Location: ./auth.php');
}









