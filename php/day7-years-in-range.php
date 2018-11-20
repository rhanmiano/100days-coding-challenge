<?php
/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 7 Years in a Range
// Write a program to count the number of years in a range that has a repeated digit.
// For example, 2012 has a repeated digit, but 2013 does not.
// 
// Output should be a list of those years, and the total count.
$curYear   = date("Y");
$startYear = 1990;

function yearsInRange($startYear, $curYear){
  $years = new stdClass();
  $years->count = 0;
  $years->list = [];

  for($i=$startYear; $i<=$curYear; $i++){
    $strTemp = $i;
    $arrTemp = [];

    for($j=0; $j<=strlen($strTemp)-1; $j++){
      $char = substr($strTemp, $j, 1);

      array_push($arrTemp, $char);
    }

    if(hasRepeatingNums($arrTemp)){
      $years->count = $years->count + 1;
      array_push($years->list, $i);
    }
  }

  return $years;
}

function hasRepeatingNums($args){
  $arrNums = $args;

  usort($arrNums, function($obj1, $obj2){
    return $obj1 > $obj2;
  });

  for($i=0; $i<=sizeof($arrNums)-1; $i++){
    if($i>0){
      if($arrNums[$i] == $arrNums[$i-1]){
        return true;
        break;
      }
    }    
  }
}

$check = yearsInRange($startYear, $curYear);

echo "<pre>";
var_dump($check);
echo "</pre>";