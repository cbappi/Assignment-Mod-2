<?php

echo"<h3>Task 1: Looping with Increment using a Function</h3><br/>";
echo "Use for loop in a Function<br/>";
echo "All even numbers from 1 to 20 are following : <br/>";
function isEvenForLoop($a,$n,$b){

    for($x = $a; $x <= $n; $x = $x+$b) {
        echo $x." , ";
    }

}

isEvenForLoop(2,20,2);

echo "<br>";
echo "<br>";

echo "Use while loop in a Function<br/>";
echo "All even numbers from 1 to 20 are following : <br/>";


function isEvenWhileLoop($c,$d,$m){

    $x = $c;
    while($x <= $d) {

    echo $x." , ";
    $x = $x+$m;

    }
}

isEvenWhileLoop(2,20,2);

echo "<br>";
echo "<br>";


echo "Use do while loop in a Function<br/>";
echo "All even numbers from 1 to 20 are following : <br/>";


function isEvenDoWhileLoop($e,$h,$r){
 
            $x = $e;
            do {
                echo $x." , ";
                $x = $x+$r;
            } while ($x <= $h);

}

isEvenDoWhileLoop(2,20,2);