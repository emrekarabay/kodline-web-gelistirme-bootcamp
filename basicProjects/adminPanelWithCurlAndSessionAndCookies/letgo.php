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
if(isset($_SESSION["loginUsername"])){
    require 'dbConnectPhp.php';
    if(!isset($_COOKIE["dil"])){
        setcookie("dil",substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) .'.php',time()+(86400*30));
        sleep(1);
        header("Refresh:0; url=http://localhost/letgo.php");
    }
    require $_COOKIE["dil"];
}else{
    goto end;
} ?>
<!-- Yetkisiz Girişi Önleme Bitiş -->
<!-- Sayfa Dili Belirleme Başlangıç -->
<?php if(isset($_GET["dil"])){
    if ($_GET["dil"] == "tr"){
        $_COOKIE["dil"] = "tr.php";
        require $_COOKIE["dil"];
        //header("http://localhost/letgo.php");

    }
    elseif($_GET["dil"] == "en"){
        $_COOKIE["dil"] = "en.php";
        require $_COOKIE["dil"];
        //header("http://localhost/letgo.php");

    }
}

 ?>
<!-- Sayfa Dili Belirleme Bitiş -->
<!-- Navbar Başlangıç -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><img src="https://statics.olx.com.tr/external/base/img/letgo/logo.svg"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./letgo.php"><?php echo $dil["letgoMainPage"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoCar"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoPhone"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoElectronic"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $dil["letgoHomeContent"] ?></a>
                </li>
            </ul>
                <span class="navbar-text">
                    <a href="?dil=tr"><img src="https://cdn-icons-png.flaticon.com/512/197/197518.png" width="50px" height="50px"></a>
                    <a href="?dil=en"><img src="https://cdn-icons-png.flaticon.com/512/4060/4060233.png" width="50px" height="50px"><a>

                </span>

        </div>
    </div>
</nav>
<!-- Navbar Bitiş -->
<!-- İçerik Başlangıç -->
<div class="row">
    <?php
        require'dbConnectPhp.php';
    $sorguUsers = $conn->query(" select * from caldiklarim ");

    $usersListele = $sorguUsers -> fetchall();

    foreach ($usersListele as $user) {

    ?>
        <div class="col-4 mt-3 ">
            <div class="card mx-auto" style="width: 18rem;">
                <img src="<?php echo $user["url"] ?>" class="card-img-top" alt="..." height="200px" width="200px">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user['baslik']; ?></h5>
                    <p class="card-text"><?php echo $user['price'] . " TL yerine " . $user['discountPrice'] . " TL "; ?></p>
                    <a href="#" class="btn btn-primary"><?php echo $dil['addToCart']; ?></a>
                </div>
            </div>
        </div>

    <?php
    } ?>
</div>
<!-- İçerik Bitiş -->

<?php end:?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>