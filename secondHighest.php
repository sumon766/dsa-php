<?php

    //Find the second highest value in an array

    function secondHighest ($arr) 
    {
        $largest = PHP_INT_MIN;
        $secondLargest = PHP_INT_MIN;

        foreach ($arr as $num)
        {
            if ($num > $largest) 
            {
                $secondLargest = $largest;
                $largest = $num;
            }

            if ($num < $largest && $num > $secondLargest) {
                $secondLargest = $num;
            }
        }

        return $secondLargest;
    }

    $my_array = [8, 13, 21, 16, 87, 23, 34, 60];
    echo "The second highest value is : " . secondHighest($my_array);

?>