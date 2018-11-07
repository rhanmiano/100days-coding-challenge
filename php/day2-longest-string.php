<?php
/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 2 Find the longest word in a string

/**
 * Explode the words with [space] delimiter
 * and loop through it. For each loop create an
 * object that will hold the word itself and its
 * length, the object will then be pushed 
 * to arrTemp[] and gets sorted.
 * Prints longest word/words and its/their length.
 */
function getLongestString($args){
  if(is_string($args)) {
    $arrWords       = explode(" ", $args);
    $arrTemp        = []; 
    $arrLongestWord = [];

    foreach ($arrWords as $word) {
      $objValue         = new stdClass();
      $objValue->word   = $word;
      $objValue->length = strlen($word);

      array_push($arrTemp, $objValue);
    }

    usort($arrTemp, function($obj1, $obj2){
      return $obj1->length > $obj2->length;
    });

    array_push($arrLongestWord, $arrTemp[sizeof($arrTemp) - 1]);

    // What if there are other words with equal lengths?
    $arrWordsSameLength = [];
    foreach ($arrTemp as $word) {
      if($arrLongestWord[0]->length == $word->length){
        array_push($arrWordsSameLength, $word);
      }
    }

    // Print to html word/words with
    $string = "";
    if(sizeof($arrWordsSameLength) > 0) {
      $string = $string . "Longest Words: ";
      foreach ($arrWordsSameLength as $value) {
        $string = $string . $value->word . ", ";          
      }
      $string = substr($string, 0, strlen($string) - 2);
    } else {
      $string = $string . "Longest word: " . $arrLongestWord[0]->word;        
    }

    $string = $string . "\r\n Length: " . $arrLongestWord[0]->length;

    echo nl2br($string);
  } else {
    throw new Exception('Parameter should be a string');
  }  
}

try{
  getLongestString("sampu anim pito tatlo");
} catch(Exception $e){
  echo "Error: " . $e->getMessage();
} 