<?php

// <6 kyu> Which are in? 

// Given two arrays of strings a1 and a2 return a sorted array r in lexicographical order of the strings of a1 which are substrings of strings of a2.

// Example 1:
// a1 = ["arp", "live", "strong"]

// a2 = ["lively", "alive", "harp", "sharp", "armstrong"]

// returns ["arp", "live", "strong"]

// Example 2:
// a1 = ["tarp", "mice", "bull"]

// a2 = ["lively", "alive", "harp", "sharp", "armstrong"]

// returns []

function inArray($array1, $array2) {
    $response = [];

    foreach($array1 as $element)
    {
        if(str_contains(implode("-",$array2),$element)){
            array_push($response,$element);
        }
    }
    sort($response);
    
    return $response;
}