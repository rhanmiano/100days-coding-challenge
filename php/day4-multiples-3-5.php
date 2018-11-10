<?php
/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 4 Multiples of 3 and 5
//   If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
//   The sum of these multiples is 23.
//   
//   Find the sum of all the multiples of 3 or 5 below the provided parameter value number.

/**
 * Iterate through the number, and along the loop
 * check for all the multiples of 3 and 5 by
 * using modulo. If index is a multiple just keep
 * adding it to $nSum.
 */
function getSumMulti($args){
  $nSum = 0;

  for($i=1; $i<$args; $i++){
    if($i%3 == 0 || $i%5 == 0){
      $nSum += $i;
    }
  }

  return $nSum;
}

$num = 10;
echo "Number: " . $num. " | Sum of multiples of 3 and 5: " . getSumMulti($num);