<?php

echo"<h3>Task 3: Break on Condition</h3><br/>";
echo "Required numbers are following : <br/>";

$f1 = 0;
$f2 = 1;
$n = 100;


for($i = 1; $i <= $n; $i++) {
  
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    if($f3>100){
        break;
    }
    echo $f3." , "; 
}
