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
 * Split the words with [space] delimiter
 * and loop through it. For each loop create an
 * object that will hold the word itself and its
 * length, the object will then be pushed 
 * to arrTemp[] and gets sorted.
 * Returns an array.
 */
let getLongestString = function (args){
  try{
    let arrWords = args.split(" "),
        arrTemp = [];
        arrLongestWord = [];
    arrWords.forEach(function(value){
      let objValues    = {};   
      objValues.word   = value;
      objValues.length = value.length;

      arrTemp.push(objValues);
    });
    
    arrTemp.sort(function(a,b){
      return a.length - b.length;
    });

    arrLongestWord.push(arrTemp[arrTemp.length - 1]);

    // What if there are other words with equal lengths?
    let arrWordsSameLength = [];
    arrTemp.forEach(function(value){
      if(arrLongestWord[0].length == value.length) {
        arrWordsSameLength.push(value);
      }
    });

    // Returns an array of word or words with the longest length
    return arrWordsSameLength.length > 0 ? arrWordsSameLength : arrLongestWord;
  } catch(err){
    return `${err.name}: Given param is not a string and therefore ${err.message}`;
  }  
}

