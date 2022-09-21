<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<?php  ?>

<?php
session_start();

if(!isset($_GET["dil"],$_SESSION["dil"])){
    $_SESSION["dil"] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) .".php";
    require substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2).".php";
}else {
    if ($_GET["dil"] == "tr"){
        $_SESSION["dil"] = "tr.php";
        require $_SESSION["dil"];
        header("http://localhost/yeni.php?dil=tr");

    }
    elseif($_GET["dil"] == "en"){
        $_SESSION["dil"] = "en.php";
        require $_SESSION["dil"];
        header("http://localhost/yeni.php?dil=en");

    }
    else{
        require $_SESSION["dil"];
        header("http://localhost/yeni.php?dil=" . $_GET["dil"]);
    }
}
?>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Emre Karabay</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><?php echo $dil["anasayfa"] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./iletisim.php"><?php echo $dil["iletisim"] ?></a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href="?dil=tr"><img src="https://cdn-icons-png.flaticon.com/512/197/197518.png" width="50px" height="50px"></a>
                    <a href="?dil=en"><img src="https://cdn-icons-png.flaticon.com/512/4060/4060233.png" width="50px" height="50px"><a>
                </span>
            </div>
        </div>
    </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>
<?php

