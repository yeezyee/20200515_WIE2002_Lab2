<?php
echo "<pre>";
$spaces = 4;
for ($i = 0; $i <= 4; $i++) {

    for ($k = 0; $k < $spaces; $k++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j < 2 * $i - 1; $j++) {
        echo "*";
    }

    $spaces--;
    echo "<br/>";
}
echo "</pre>";
?>