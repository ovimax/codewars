<?php

// <6 kyu> Duplicate Encoder

// The goal of this exercise is to convert a string to a new string where each character in the new string is "(" if that character appears only once in the original string, or ")" if that character appears more than once in the original string. Ignore capitalization when determining if a character is a duplicate.

// Examples
// "din"      =>  "((("
// "recede"   =>  "()()()"
// "Success"  =>  ")())())"
// "(( @"     =>  "))((" 

function duplicate_encode($word){
    $word = strtolower($word); 
	$count_chars = count_chars($word,1);

    $response = "";
    foreach(str_split($word) as $char)
    {
        if($count_chars[ord($char)]==1)
        {
            $response .= "(";
        } else {
            $response .= ")";
        }
    }

    return $response;
}