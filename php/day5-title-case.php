<?php
/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 5 Title Case A Sentence
//   Return the provided string with the first letter of each word capitalized.
//   Make sure the rest of the word is in lower case.

/**
 * Init a string to handle the output.
 * Loop trough the provided string, and get each char by
 * using substr. Check if it's the first char in the string
 * and if the char before it is a space ' ', make the
 * char uppercase if it's in lowercase, otherwise for any other
 * chars make it lowercase if it's in uppercase. Append each
 * char to $strOutput.
 * Note: PHP has ucwords() for this job
 */
function titleCase($args){
  if(is_string($args)) {
    $strOutput = '';
    
    for($i=0; $i<=strlen($args)-1; $i++){
      $char = substr($args, $i, 1);
      if(substr($args, $i-1, 1) == ' ' || $i == 0){
        if($char == strtolower($char)) {
          $char = strtoupper($char);
        }
      } else {
        if($char == strtoupper($char)){
          $char = strtolower($char);
        }
      }
      
      $strOutput .= $char;
    }
    
    return $strOutput;
  } else {
    throw new Exception('Provided input is not a string');
  }  
}

try{
  echo titleCase("the day yOu sAid goodnighT");
} catch(Exception $e){
  echo "Error: " . $e->getMessage();
} 