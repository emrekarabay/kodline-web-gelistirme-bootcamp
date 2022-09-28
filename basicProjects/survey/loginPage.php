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
<?php
require 'dbConnectPhp.php';
if(!isset($_SESSION["id"])){
    if(!isset($_COOKIE["dil"])){
        setcookie("dil",substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) .'.php',time()+(86400*30));
        sleep(1);
        header("Refresh:0; url=http://localhost/loginPage.php");

    }
}
require $_COOKIE["dil"];

?>
<!-- Yetkisiz Girişi Önleme Bitiş -->
<!-- Sayfa Dili Belirleme Başlangıç -->
<?php if(isset($_GET["dil"])){
    if ($_GET["dil"] == "tr"){
        $_COOKIE["dil"] = "tr.php";
        require $_COOKIE["dil"];

    }
    elseif($_GET["dil"] == "en"){
        $_COOKIE["dil"] = "en.php";
        require $_COOKIE["dil"];

    }
}

?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
            <span class="navbar-text mx-auto">
                    <a href="?dil=tr"><img src="https://cdn-icons-png.flaticon.com/512/197/197518.png" width="50px" height="50px"></a>
                    <a href="?dil=en"><img src="https://cdn-icons-png.flaticon.com/512/4060/4060233.png" width="50px" height="50px"><a>

            </span>
    </div>
    </div>
</nav>
    <form class="ms-3 me-3 mt-3" method="POST" action="loginControl.php">
        <div class="mb-3">
            <label for="InputUsername1" class="form-label"><?php echo $dil["kullaniciAdi"]; ?></label>
            <input type="text" class="form-control" name="username" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"><?php echo $dil["girisUyari"]; ?></div>
        </div>
        <div class="mb-3">
            <label for="InputPassword1" class="form-label"><?php echo $dil["sifre"]; ?></label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php end:?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
