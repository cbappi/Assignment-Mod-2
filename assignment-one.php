<?php

echo"<h3>Task 1: Looping with Increment using a Function</h3><br/>";
echo "Use for loop in a Function<br/>";
echo "All even numbers from 1 to 20 are following : <br/>";
function isEvenForLoop($start,$end,$step){
    $x = $start+1;

    for($x; $x <= $end; $x+=$step) {
        echo $x." , ";
    }

        }



isEvenForLoop(1,20,2);




echo "<br>";
echo "<br>";

echo "Use while loop in a Function<br/>";
echo "All even numbers from 1 to 20 are following : <br/>";


function isEvenWhileLoop($start,$end,$step){

    $x = $start+1;
    while($x <= $end) {

    echo $x." , ";
    $x += $step;

    }
}

isEvenWhileLoop(1,20,2);

echo "<br>";
echo "<br>";


echo "Use do while loop in a Function<br/>";
echo "All even numbers from 1 to 20 are following : <br/>";


function isEvenDoWhileLoop($start,$end,$step){
           
            $x = $start+1;
           
           
           do {
                echo $x." , ";
                $x += $step;
            } while ($x <= $end);

}

isEvenDoWhileLoop(1,20,2);