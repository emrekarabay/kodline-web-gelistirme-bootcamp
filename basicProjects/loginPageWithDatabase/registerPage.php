<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kodline Bootcamp">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Suleyman Emre Karabay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {

        }
        .inputArea {
            border-radius: 30px;
            width: 50%;
            height: 10%;
            text-indent: 10px;

        }
        input:hover {
            border: 2px solid rebeccapurple;
        }
        .inputButton {
            width: 25%;
            height: 10%;
            background:    #00ffff;
            background:    linear-gradient(#00ffff, #15d798);
            border-radius: 30px;
            padding:       20px 45px;
            color:         #ffffff;
            font:          normal bold 25px/1 "Open Sans", sans-serif;
            text-align:    center;

        }
        input {
            margin: auto;
            margin-top: 12%;
            display: block;
        }
    </style>
</head>
<body>
<form method="post" action="registerPageControl.php">
    <label>
        <input class="inputArea" type="text" name = "username" placeholder="Username" required>
    </label>
    <br>
    <label>
        <input class="inputArea" type="password" style="margin-top: 5px;" name = "password" placeholder="Password" required>
    </label>
    <br>
    <label>
        <input class="inputArea" type="password" style="margin-top: 5px;" name = "confirmPassword" placeholder="Confirm Password" required>
    </label>
    <br>
    <input class="inputButton" type="submit" style="margin-top: 5px;" value="Register">
    <input class="inputButton" type="reset" style="margin-top: 5px;" value="Reset">

</form>
<?php
?>
</body>
</html>