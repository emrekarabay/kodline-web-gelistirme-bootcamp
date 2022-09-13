<?php

require'dbConnectPhp.php';

$gelenID = $_GET['id'];
$gelenUsername = $_GET['username'];
$gelenPassword = $_GET['password'];

$sorguUsers = $conn -> prepare(" UPDATE users SET username=?,password=? WHERE id=?");

$sorguUsers -> execute([$gelenUsername,$gelenPassword,$gelenID]);

if($sorguUsers){
    echo "güncellendi";
}


