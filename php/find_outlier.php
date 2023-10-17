<?php

// <6 kyu> Find The Parity Outlier

// You are given an array (which will have a length of at least 3, but could be very large) containing integers. The array is either entirely comprised of odd integers or entirely comprised of even integers except for a single integer N. Write a method that takes the array as an argument and returns this "outlier" N.

// Examples
// [2, 4, 0, 100, 4, 11, 2602, 36]
// Should return: 11 (the only odd number)

// [160, 3, 1719, 19, 11, 13, -21]
// Should return: 160 (the only even number)

function find($integers) {
    sort($integers);

    $find = "";
    $parity1 = $integers[0]%2==0?"even":"odd";

    foreach($integers as $num)
    {
        $parity2 = $num%2==0?"even":"odd";
        if($parity1 != $parity2)
        {
            $find = $num;
            break;
        }
    }

    return $find;
}

var_dump(find([160, 3, 1719, 19, 11, 13, -21]));