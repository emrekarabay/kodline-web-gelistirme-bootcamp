<?php


session_start();
if(isset($_SESSION["loginUsername"])){
    require'dbConnectPhp.php';
}else{
    goto end;
}

$gelenID = $_POST["id"];
$gelenUsername = $_POST["username"];
$gelenPassword = $_POST["password"];
$gelenAuthLevel = $_POST["authLevel"];
$gelenDiscountRate = $_POST["discountRate"];

$sorguUsers = $conn->prepare(" UPDATE kullanici SET username=? , password=? ,authLevel=? , discountRate=? WHERE id=?");
$sorguUsers ->execute([$gelenUsername,$gelenPassword,$gelenAuthLevel,$gelenDiscountRate,$gelenID]);
if($sorguUsers){
    header('Location: ./adminPanel.php');
}
end:
?>