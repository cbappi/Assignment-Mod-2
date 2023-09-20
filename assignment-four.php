<?php

echo"<h3>Task 4: Fibonacci Series printing using a Function</h3><br/>";
echo "First 15 numbers in the Fibonacci series : <br/>";

function fiboDisplay($n){

    $f1 = 0;
    $f2 = 1;
   
    echo $f1." , ";
   
    echo $f2;
   
    for($i = 2; $i<$n; $i++) {
         
        $f3 = $f1 + $f2;
        echo " , ".$f3; 
        $f1 = $f2;
        $f2 = $f3;
      
    }
    
    }
    fiboDisplay(15);


    

