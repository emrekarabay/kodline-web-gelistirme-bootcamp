<?php

require'dbConnectPhp.php';

$gelenID = $_GET['id'];

$sorguUsers = $conn->prepare(" select * from users where id=?");

$sorguUsers -> execute([$gelenID]);

$usersListele = $sorguUsers -> fetch(PDO::FETCH_ASSOC);
?>
<form action="guncellenmis.php">

    <input type='text' name='id' value='<?php echo $usersListele['id']; ?>'>
    <input type='text' name='username' value='<?php echo $usersListele['username']; ?>'>
    <input type='text' name='password' value='<?php echo $usersListele['password']; ?>'>
    <input type="submit" value="Submit" style="margin-top: 5px; " name="guncelle">

</form>
