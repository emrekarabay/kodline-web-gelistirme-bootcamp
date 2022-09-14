<?php

require 'dbConnectPhp.php';

$count = 0;

$sorguUsers = $conn->query(" select * from users ");
$usersListele = $sorguUsers -> fetchall();

if(isset($_POST['username'],$_POST['password'])) {
    foreach ($usersListele as $user) {
        if ($_POST['password'] == $user['password'] && $_POST["username"] == $user["username"]) {
            header('Location: ./adminPanel.php');
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

