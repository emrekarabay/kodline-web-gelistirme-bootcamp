<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="registerControl.php">
    <div class="row mt-3 ms-3 me-3">
        <div class="input-group mb-3" >
            <span class="input-group-text">@</span>
            <div class="form-floating">
                <input type="text" class="form-control" name="username" placeholder="Username" style="text-indent: 10px;">
                <label for="floatingInputGroup1">Username</label>
            </div>
        </div>
        <div class="form-floating" style="text-indent: 10px;">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mt-3" style="text-indent: 10px;">
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mt-3 mb-3">Sign Up</button>
        </div>

    </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
