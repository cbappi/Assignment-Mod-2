<?php

echo"<h3>Task 2: Skip Multiples of 5</h3><br/>";
echo "Required numbers are following : <br/>";
for($x = 1; $x <= 50; $x = $x+1) {

    if ($x % 5 == 0) {
        continue;
    }

    echo $x." , ";
}