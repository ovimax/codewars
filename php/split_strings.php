<?php

// <6 kyu> Split Strings

// Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

// Examples:

// * 'abc' =>  ['ab', 'c_']
// * 'abcdef' => ['ab', 'cd', 'ef']


function solution($str) {
    if($str=="") return [];
    if(strlen($str)%2==1)
    {
        $str .= "_";
    }
    $split_str = str_split($str,2);

    return array_values($split_str);
}

var_dump(solution(""));