<?php

require'dbConnectPhp.php';

$sorguUsers = $conn-> prepare("INSERT INTO users(username,password) VALUES (:username,:password)");

$sorguUsers->bindParam(':username', $username);
$sorguUsers->bindParam(':password', $password);

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['password'] == $_POST['confirmPassword']){
    $sorguUsers->execute();
}else{
    echo "<p>";
    echo "Please same password on the form";
    echo "</p>";
    goto end;
}



$sorguUsers = $conn->query(" select * from users ");

$usersListele = $sorguUsers -> fetchall();

echo "Users in database" . "<br>";

foreach ($usersListele as $user) {
    echo $user['username'] . " " . $user["password"] . "<br>";
}
end: