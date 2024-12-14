<?php

    //Find the lowest value in an array

    function lowestValue ($arr) 
    {
        $lowest = $arr[0];

        for ($i = 0; $i < count($arr); $i++) 
        {
            if ($arr[$i] < $lowest) 
            {
                $lowest = $arr[$i];
            }
        }

        return $lowest;
    }

    $my_array = [7, 12, 9, 4, 11];
    echo "The lowest value is: " . lowestValue($my_array);

?>