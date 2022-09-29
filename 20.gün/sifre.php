<?php

$variable = "sifre";

echo $variable . "<br>";

echo md5($variable) . "<br>";

echo sha1($variable) . "<br>";

echo crypt($variable,"emre") . "<br>";