<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kodline Bootcamp">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Suleyman Emre Karabay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<form method="get" action="ikinciSayfa.php">
    <label>
        Username:
        <input type="text" name = "username">
    </label>
    <br>
    <label>
        Password:
        <input type="password" style="margin-top: 5px;" name = "password">
    </label>
    <br>
    <label>
        Gender:
        <input type="radio" value = "male" name="gender" style="margin-top: 5px; ">Male
        <input type="radio" value = "female" name="gender" style="margin-top: 5px; ">Female
    </label>
    <br>
    <label>
        Courses:
        <input type="checkbox" name="mobileApp" style="margin-top: 5px; ">Mobile App
        <input type="checkbox" name="webProgramming" style="margin-top: 5px; ">Web Programming
    </label>
    <br>
    <input type="submit" value="Submit" style="margin-top: 5px; ">
</form>
    <br>
    <a href="menu.php">Geri</a>

<?php


?>
</body>
</html>


