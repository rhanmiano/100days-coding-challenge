<?php
/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 3 Reverse a stringReverse the provided string.
//   Reverse the provided string.
//   You may need to turn the string into an array before you can reverse it.
//   The result must be string.

/**
 * Check a param if it's a valid string. If yes
 * init a variable that will hold the reversed
 * string and temp array variable. Loop through 
 * the length of args less 1 down to 0 and get the 
 * portion of $args(between current index, and a step)
 * Iteration is done backwards so pushed chars to 
 * arrTemp are from right to left. Loop through arrTemp
 * to concat each char to reversedStr.
 *
 * NOTE: Php has strrev() to do the job.
 */
function reverseString($args){
  if(is_string($args)) {
    $reversedStr = '';
    $arrTemp     = [];
    
    for($i=strlen($args)-1; $i>=0; $i--){
      $char = substr($args, $i, 1);
      array_push($arrTemp, $char);
    }
    
    foreach ($arrTemp as $char){
      $reversedStr = $reversedStr . $char;
    }
    
    return $reversedStr;
  } else {
    throw new Exception('Parameter should be a string');
  }  
}

try{
  echo reverseString("I hope that you're doing fine");
} catch(Exception $e){
  echo "Error: " . $e->getMessage();
} 