<?php

require "dbConnectPhp.php";

$gelenUsername = $_SESSION['username'];
if(isset($_POST["activationCodeSubmit"])){
    $sorguUsers = $conn->prepare(" select * from users where username=?");
    $sorguUsers ->execute([$gelenUsername]);
    $usersListele = $sorguUsers -> fetch();
    if($_POST["activationCode"] == $usersListele["activationCode"]){
        $sorguUsers2 = $conn->prepare(" UPDATE users SET authLevel = ? WHERE id=?");
        $sorguUsers2 ->execute(["1",$usersListele["id"]]);
        header('Location: ./adminPanel.php?idd='.$usersListele["id"]);
    }else{
        echo "Lütfen doğrulama kodunu kontrol ediniz!!!!!";
    }
}