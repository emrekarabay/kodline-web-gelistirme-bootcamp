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
if(isset($_SESSION["id"])){
    if(!isset($_COOKIE["dil"])){
        setcookie("dil",substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) .'.php',time()+(86400*30));
        sleep(1);
        header("Refresh:0; url=http://localhost/survey.php");
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
<div class="card m-3" style="width: 50%;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $dil["anketBaslik1"]; ?></h5>
        <form class=" bg-white px-4" action="surveyControl.php" method="post">
            <p class="fw-bold"><?php echo $dil["anketSoru1"]; ?></p>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" value="javaScript" />
                <label class="form-check-label" for="exampleForm">javaScript</label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" value="PHP" />
                <label class="form-check-label" for="exampleForm">PHP</label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" value="react.js" />
                <label class="form-check-label" for="exampleForm">react.js</label>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary" name="submitSurvey" value="1">Submit</button>

            </div>
        </form>
    </div>
</div>
<div class="card m-3" style="width: 50%;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $dil["anketBaslik2"]; ?></h5>
        <form class=" bg-white px-4" action="surveyControl.php" method="post">
            <p class="fw-bold"><?php echo $dil["anketSoru2"]; ?></p>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" value="balikesir" />
                <label class="form-check-label" for="exampleForm">Balıkesir</label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" value="Eskisehir" />
                <label class="form-check-label" for="exampleForm">Eskişehir</label>
            </div>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleForm" value="canakkale" />
                <label class="form-check-label" for="exampleForm">Çanakkale</label>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary" name="submitSurvey" value="2">Submit</button>
            </div>
        </form>
    </div>
</div>

<a class="m-3" href="surveyResult.php"><?php echo $dil["sonucSayfasinaGit"]; ?></a>

<?php end:?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>