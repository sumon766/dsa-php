<?php

    //Bubble Sort Algorithm using PHP

    function bubbleSort ($arr) 
    {
        $n = count($arr);
        $swapped = false;

        for ($i = 0; $i < $n - 1; $i++) 
        {
            for ($j = 0; $j < $n - $i -1; $j++) 
            {
                if ($arr[$j] > $arr[$j + 1])
                {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $swapped = true;

                    if(!$swapped) {
                        break;
                    }
                }
            }
        }

        return $arr;
    }

    print_r(bubbleSort([64, 34, 25, 12, 22, 11, 90, 5]));

?>