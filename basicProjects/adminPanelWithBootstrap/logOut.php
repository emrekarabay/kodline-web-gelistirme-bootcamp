<?php

require'dbConnectPhp.php';

$gelenID = $_GET["logOutID"];

$sorguUsers = $conn->prepare("UPDATE users SET lastLoginDate = ? WHERE id=?");

if($sorguUsers){
    $LastLoginDate = date("Y-m-d H:i:s");
    $sorguUsers ->execute([$LastLoginDate,$gelenID]);
    header('Location: ./loginPage.php');
}
?><?php
