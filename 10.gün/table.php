<html>
<head>

</head>
<body>
<?php

require'dbConnectPhp.php';

$sorguUsers = $conn->query(" select * from users ");

$usersListele = $sorguUsers -> fetchall();

echo "Users in database" . "<br>";

    echo "<table border = '2' align='center'>"?>
        <tr>
            <th>username</th>
            <th>password</th>
            <th>Düzenle</th>
        </tr>
        <?php
            foreach ($usersListele as $user) {
            ?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user["password"]; ?></td>
                    <td><a href='updatePage.php?id=<?php echo $user["id"] ?>'>Düzenle</a></td>
                <tr>
    <?php
            }

    echo "</table>";
    ?>
    </body>

</html>
