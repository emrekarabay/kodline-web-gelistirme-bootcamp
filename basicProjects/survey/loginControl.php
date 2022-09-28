<?php

require 'dbConnectPhp.php';

$count = 0;

$sorguUsers = $conn->query(" select * from users ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['username'],$_POST['password'])) {
    foreach ($usersListele as $user) {
        if ($_POST['password'] == $user['password'] && $_POST["username"] == $user["username"]) {

            $sorguUsers2 = $conn->prepare(" select * from users WHERE username= ? ");
            $sorguUsers2 -> execute([$_POST['username']]);
            $usersListe = $sorguUsers2 -> fetch();
            $loginID = $usersListe["id"];
            $_SESSION["id"] = $loginID;
            header('Location: ./survey.php');
        } else {
            $count++;
        }
    }
}

$countRow = $sorguUsers -> rowCount();
if ($count == $countRow){
    echo "Please enter the correct username and password";

}

