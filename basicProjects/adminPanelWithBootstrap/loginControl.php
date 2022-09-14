<?php

require 'dbConnectPhp.php';

$count = 0;

$sorguUsers = $conn->query(" select * from users ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['username'],$_POST['password'])) {
    foreach ($usersListele as $user) {
        if ($_POST['password'] == $user['password'] && $_POST["username"] == $user["username"]) {
            echo $_POST['username'] . " hoşgeldin" . "<br>";
            break;
        } else {
            $count++;
        }
    }
}

if ($count > 0){
    echo "Please enter the correct username and password";

}
