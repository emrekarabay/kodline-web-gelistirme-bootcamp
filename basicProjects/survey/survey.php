<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="card m-3" style="width: 50%;">
    <div class="card-body">
        <h5 class="card-title">Anket 1</h5>
        <form class=" bg-white px-4" action="surveyControl.php" method="post">
            <p class="fw-bold">What is your favorite programming language?</p>
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
        <h5 class="card-title">Anket 2</h5>
        <form class=" bg-white px-4" action="surveyControl.php" method="post">
            <p class="fw-bold">What is your favorite city </p>
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

<a href="surveyResult.php">Sonuçlara Git</a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>