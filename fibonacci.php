<?php

    //Fibonacci number algorithm

    $prev2 = 0;
    $prev1 = 1;

    echo $prev2 . "<br>";
    echo $prev1 . "<br>";

    for ($i = 0; $i < 18; $i++) {
        $newFibo = $prev1 + $prev2;
        echo $newFibo . "<br>";

        $prev2 = $prev1;
        $prev1 = $newFibo;
    }

?>