<?php

$string = "emrekarabay@gmail.com.tr";

$desen = "/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-z]{2,4}+.[a-zA-z]{2,4}/";

echo preg_match_ALL($desen,$string) . "<br>";

