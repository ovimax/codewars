<?php

/**
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them
 */

function solution($number){
  $solution = 0;
  for ($i=$number-1; $i >= 1 ; $i--) { 
    if($i%5==0 && $i%3 == 0)
      {
      $solution += $i;
    }elseif($i%5==0)
      {
      $solution += $i;
    }elseif($i%3==0){
      $solution += $i;
    }
  }
  
  
  return $solution;
}

var_dump(solution(1000));