<?php

require "dbConnectPhp.php";

$gelenUsername = $_POST["username"];
$gelenPassword = $_POST["password"];
$gelenConfirmPassword = $_POST["confirmPassword"];

$sorguUsers = $conn->prepare(" INSERT INTO users SET username=?,password=?");
if($gelenPassword == $gelenConfirmPassword){
    $sorguUsers ->execute([$gelenUsername,$gelenPassword]);
    header('Location: ./loginPage.php');
}








