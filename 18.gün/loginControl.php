<?php
require 'dbConnectPhp.php';

$count = 0;

$gelenUsername = $_POST['username'];

$sorguUsers = $conn->query(" select * from users where username = '" . $_POST['username']."' and password='".$_POST['password']."'");

$usersListele = $sorguUsers -> fetchall();
//if ($usersListele>0)) echo "giriş başarılı";
//
//if(isset($_POST['username'],$_POST['password'])) {
//    foreach ($usersListele as $user) {
//        if ($_POST['password'] == $user['password'] && $_POST["username"] == $user["username"]) {
//
//            $sorguUsers2 = $conn->query(" select * from users WHERE username = " . $_POST['username']);
//
//            $usersListe = $sorguUsers2 -> fetch();
//            $loginID = $usersListe["id"];
//
//            header('Location: ./adminPanel.php?idd='.$loginID);
//            break;
//        } else {
//            $count++;
//        }
//    }
//}
$countRow = $sorguUsers -> rowCount();
if ($countRow >0){
    echo "giriş başarılı";
//
}
