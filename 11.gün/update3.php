<?php

require'dbConnectPhp.php';

$gelenID = $_POST["id"];


$sorguUsers = $conn->prepare(" UPDATE users SET username=? , password=? WHERE id=?");

$sorguUsers ->execute([$gelenUsername,$gelenPassword,$gelenID]);

if($sorguUsers){
    header('Location: ./table.php');
}
?><?php
