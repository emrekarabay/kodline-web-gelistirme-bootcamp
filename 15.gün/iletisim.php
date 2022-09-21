
<?php
session_start();
if($_SESSION["dil"] == "tr.php"){
    require "tr.php";
    echo $dil["karsilama"];
}else {
    require "en.php";
    echo $dil["karsilama"];
}
