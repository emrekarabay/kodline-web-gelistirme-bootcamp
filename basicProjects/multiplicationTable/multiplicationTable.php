<?php

for($i = 0; $i <= 10; $i++){
    echo "<table style = 'border: 3px solid red;margin: 5px; float: left;' cellspacing=0 cellpading=0 >";
    echo "<tr>";
        echo "<th>";
        echo $i;
        echo "</th>";
    echo "</tr>";
    for ($j = 0; $j <= 10; $j++){
        echo "<tr>";
            echo "<td>";
            echo $i . " x " . $j . " = " . $i*$j . "<br>";
            echo "</td>";
        echo "<tr>";
    }
}
echo "</table>";