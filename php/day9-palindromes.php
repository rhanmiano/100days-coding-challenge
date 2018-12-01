<?php
/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 9 - Palindromes
//  Write a program that checks if a string entered by the user is a palindrome. 
//  A palindrome is a word that reads the same forwards as backwards like “racecar”

/**
 * Used an existing function created in Day 3 challenge
 * to reverse a string and created a function
 * to check where the given parameter is equals to
 * the reversed one.
 */

function reverseString($args){  
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
}

function isPalindrome($args){
  if(is_string($args)) {
    $reversed = reverseString($args);

    return $args == $reversed ? True : False;    
  } else {
    throw new Exception('Parameter should be a string');
  } 
}

$temp = 'elle';
echo "Is '" . "$temp" . "' a palindrome: " . isPalindrome($temp);