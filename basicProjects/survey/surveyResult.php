<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sonuçlar</th>
        </tr>
        </thead>
        <tbody>
        <?php

        require'dbConnectPhp.php';

        $sorguUsers = $conn->query(" select * from survey");
        $surveyListele = $sorguUsers -> fetchall();

        $sorguUsers2 = $conn->query(" select * from survey where answer='javaScript'");
        $sumOfJavascript = $sorguUsers2 -> rowCount();

        $sorguUsers3 = $conn->query(" select * from survey where answer='PHP'");
        $sumOfPHP = $sorguUsers3 -> rowCount();

        $sorguUsers4 = $conn->query(" select * from survey where answer='react.js'");
        $sumOfReactjs = $sorguUsers4 -> rowCount();

        $sorguUsers2 = $conn->query(" select * from survey where answer='balikesir'");
        $sumOfBalikesir = $sorguUsers2 -> rowCount();

        $sorguUsers3 = $conn->query(" select * from survey where answer='eskisehir'");
        $sumOfEskisehir = $sorguUsers3 -> rowCount();

        $sorguUsers4 = $conn->query(" select * from survey where answer='canakkale'");
        $sumOfCanakkale = $sorguUsers4 -> rowCount();

        $sorguUsers5 = $conn->query(" select * from survey where surveyID=1");
        $sumOfSurvey1 = $sorguUsers5 -> rowCount();

        $sorguUsers6 = $conn->query(" select * from survey where surveyID=2");
        $sumOfSurvey2 = $sorguUsers6 -> rowCount();

        ?>
        <tr>
            <th scope="row">Anket 1</th>
            <td><?php if($sumOfJavascript > $sumOfPHP && $sumOfJavascript > $sumOfReactjs){
                    echo "javaScript " . $sumOfJavascript . " kişi tarafından " . "%" . (int)(($sumOfJavascript*100)/$sumOfSurvey1) . " oranında seçilmiş" . "<br>";
            }elseif ($sumOfPHP > $sumOfJavascript && $sumOfPHP > $sumOfReactjs){
                    echo "PHP " . $sumOfPHP . " kişi tarafından " . "%" . (int)(($sumOfPHP*100)/$sumOfSurvey1) . " oranında seçilmiş" . "<br>";
            }else {
                    echo "react.js " . $sumOfReactjs . " kişi tarafından " . "%" . (int)(($sumOfReactjs*100)/$sumOfSurvey1) . " oranında seçilmiş" . "<br>";
                } ?></td>
        </tr>
        <tr>
            <th scope="row">Anket 2</th>
            <td><?php if($sumOfBalikesir > $sumOfEskisehir && $sumOfBalikesir > $sumOfCanakkale){
                    echo "Balıkesir " . $sumOfBalikesir . " kişi tarafından " . "%" . (int)(($sumOfBalikesir*100)/$sumOfSurvey2) . " oranında seçilmiş" . "<br>";
                }elseif ($sumOfEskisehir > $sumOfBalikesir && $sumOfEskisehir > $sumOfCanakkale){
                    echo "Eskişehir " . $sumOfEskisehir . " kişi tarafından " . "%" . (int)(($sumOfEskisehirOfPHP*100)/$sumOfSurvey2) . " oranında seçilmiş" . "<br>";
                }else {
                    echo "Çanakkale " . $sumOfCanakkale . " kişi tarafından " . "%" . (int)(($sumOfCanakkale*100)/$sumOfSurvey2) . "  oranında seçilmiş" . "<br>";
                } ?></td>
        </tr>
        </tbody>
        <?php  ?>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
