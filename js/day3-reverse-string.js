/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 3 Reverse a string
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
 * to concat each char value to reversedStr.
 */
let reverseString = function (args){
  try{
    let reversedStr = '',
        arrTemp     = [];
    
    for(var i=args.length -1; i>=0; i--){
      var char = args.substr(i, 1);
      arrTemp.push(char);
    }
    
    arrTemp.forEach(function(value){
      reversedStr = reversedStr + value;  
    });
    
    return reversedStr;
  } catch(err){
    return `${err.name}: Given param is not a string.`;
  }  
}

console.log(reverseString("I hope that you're doing fine"));

