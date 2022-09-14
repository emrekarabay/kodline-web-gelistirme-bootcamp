<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<table class="table table-sm">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Edit</th>
        <th scope="col">Photo</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php

require'dbConnectPhp.php';

$sorguUsers = $conn->query(" select * from users ");

$usersListele = $sorguUsers -> fetchall();

    foreach ($usersListele as $user) {

    ?>

    <tr>
        <th scope="row"><?php echo $user["0"]; ?></th>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user["password"]; ?></td>
        <td>
            <button type="button" class="btn btn-primary"><a style="color: white;" href="update.php?updateID=<?php echo $user["id"]?>">Update</a></button>
            <button type="button" class="btn btn-danger"><a style="color: white;" href="delete.php?deleteID=<?php echo $user["id"]?>">Delete</a></button>
        </td>
        <td><img width="50px" height="50px" src='<?php echo $user["photoAdress"]; ?>'></td>

    </tr>
    <?php
            } ?>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>