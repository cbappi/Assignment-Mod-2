<?php

echo"<h3>Task 3: Break on Condition</h3><br/>";
echo "First 10 Fibonacci numbers are following : <br/>";

$f1 = 0;
$f2 = 1;
$n = 10;
echo $f1." , ";

echo $f2;

for($i = 3; $i <= $n; $i++) {
  
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    if($f3>100){
        break;
    }
    echo " , ".$f3 ; 
}
