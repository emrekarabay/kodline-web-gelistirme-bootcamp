<?php

require 'dbConnectPhp.php';

$count = 0;

$sorguUsers = $conn->query(" select * from kullanici ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['loginUsername'],$_POST['loginPassword'])) {
    foreach ($usersListele as $user) {
        if ($_POST['loginPassword'] == $user['password'] && $_POST["loginUsername"] == $user["username"]) {

            $sorguUsers2 = $conn->prepare(" select * from kullanici WHERE username= ? ");

            $sorguUsers2 -> execute([$_POST['loginUsername']]);
            $usersListe = $sorguUsers2 -> fetch();
            $loginID = $usersListe["id"];
            if($usersListe["authLevel"] == "1"){
                session_start();
                $_SESSION["loginUsernameAdmin"] = $user["username"];
                header('Location: ./adminPanel.php');

            }else{
                session_start();
                $_SESSION["loginUsername"] = $user["username"];
                header('Location: ./curlLetgo.php');
            }
            break;
        } else {
            $count++;
        }
    }
}
$countRow = $sorguUsers -> rowCount();
if ($count == $countRow){
    echo "Please enter the correct username and password";

}

