<?php

require "dbConnectPhp.php";

$email = $_POST["mail"];
$confirmMail = $_POST["confirmMail"];

$sorguMailList = $conn->prepare("INSERT INTO maillist(mailAdress) VALUES (?)");

if(isset($email,$confirmMail)){
    if($email == $confirmMail){
        $sorguMailList -> execute([$confirmMail]);
        header('Location: ./index.php');
    }
}




