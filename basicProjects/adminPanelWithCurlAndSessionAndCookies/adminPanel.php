<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<!-- Yetkisiz Girişi Önleme Başlangıç -->
    <?php session_start();
    if(isset($_SESSION["loginUsernameAdmin"])){
        require'dbConnectPhp.php';
        setcookie("dil","tr.php",time()+(86400*30));
    }else{
        goto end;
    } ?>
<!-- Yetkisiz Girişi Önleme Bitiş -->
<!-- Sayfa Dili Belirleme Başlangıç -->
<?php if(!isset($_COOKIE["dil"])){
    $_COOKIE["dil"] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) .".php";
    require substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2).".php";
}else {
    if ($_COOKIE["dil"] == "tr"){
        require $_COOKIE["dil"];
        header("http://localhost/adminPanel.php");
    }
    elseif($_COOKIE["dil"] == "en"){
        require $_COOKIE["dil"];
        header("http://localhost/adminPanel.php");
    }
} ?>
<!-- Sayfa Dili Belirleme Bitiş -->
<!-- HTML Admin Tablo Başlıklar Başlangıç -->
<table class="table table-sm">
    <thead>
        <tr>
            <th scope="col"><?php echo $dil["id"] ?></th>
            <th scope="col"><?php echo $dil["username"] ?></th>
            <th scope="col"><?php echo $dil["password"] ?></th>
            <th scope="col"><?php echo $dil["AuthLevel"] ?></th>
            <th scope="col"><?php echo $dil["discountRate"] ?></th>
        </tr>
    </thead>
    <!-- HTML Admin Tablo Başlıklar Bitiş -->
    <tbody class="table-group-divider">
    <!-- Admin Tablo Verileri Veritabanından Alma Başlangıç -->
    <?php
$sorguUsers = $conn->query(" select * from kullanici ");
$usersListele = $sorguUsers -> fetchall();
foreach ($usersListele as $user) { ?>
        <tr>
            <form method="POST" action="updateAdminPanel.php">
                <td><input type="hidden" name="id" value="<?php echo $user['id']?>"></td>
                <td><input type="text" name="username" value="<?php echo $user['username']?>"></td>
                <td><input type="text" name="password" value="<?php echo $user['password']?>"></td>
                <td><input type="text" name="authLevel" value="<?php echo $user['authLevel']?>"></td>
                <td><input type="text" name="discountRate" value="<?php echo $user['discountRate']?>"></td>
                <td><input class="btn btn-primary" type="submit" value="Submit">
            </form>

           <?php } ?>
        </tr>
    </tbody>
    <!-- Admin Tablo Verileri Veritabanından Alma Bitiş -->
</table>
<?php end: ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>