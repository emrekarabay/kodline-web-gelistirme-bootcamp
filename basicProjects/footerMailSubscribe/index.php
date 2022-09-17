<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<?php require "dbConnectPhp.php";

$sorguMailList = $conn->query("SELECT * FROM maillist");

$mailList = $sorguMailList -> fetchAll();
?>

<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid row text-light">
        <div class="col-4">
            <form method="post" action="formControl.php">
                <div class="m-1">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="inputEmail1" name="mail" aria-describedby="emailHelp">
                </div>
                <div class="m-1">
                    <label for="exampleInputEmail2" class="form-label">Confirm Email address</label>
                    <input type="email" class="form-control" id="inputEmail2" name="confirmMail"aria-describedby="emailHelp">
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </form>
        </div>
        <div class="col-8 " >
            <table class="table text-light"">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Mail Adress</th>
                </tr>
                </thead>
                <?php foreach ($mailList as $mail){ ?>
                <tbody>
                <tr>
                    <th scope="row "><?php echo $mail["id"]; ?></th>
                    <td c><?php echo $mail["mailAdress"]; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</nav>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
