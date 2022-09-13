<?php

echo "2.sayfaya hoşgeldiniz" . "<br>";
/*
if(isset($_POST['username'])){
    echo $_POST['username'] . " hoşgeldin". "<br>";
}else{
    echo "başarısız". "<br>";
}
*/
if(isset($_GET['username'])){
    echo $_GET['username'] . " hoşgeldin". "<br>";
}else{
    echo "başarısız". "<br>";
}
    ?>