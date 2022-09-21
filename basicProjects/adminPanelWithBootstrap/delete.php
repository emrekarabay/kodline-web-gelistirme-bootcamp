<?php

require'dbConnectPhp.php';

$gelenID = $_GET["deleteID"];

$sorguUsers = $conn->prepare(" DELETE FROM users WHERE id=?");

$sorguUsers -> execute([$gelenID]);

if($sorguUsers){
    header('Location: ./loginPage.php');
}


