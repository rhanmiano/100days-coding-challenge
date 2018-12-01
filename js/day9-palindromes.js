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

let reverseString = function (args){  
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
}

let isPalindrome = function(args){
  try{
    var reversed = reverseString(args);
    
    return args == reversed ? true : false; 
  } catch(err){
    return `${err.name}: Given param is not a string.`;
  }
}

let temp = 'elle'
console.log(`Is '${temp}' a palindrome?: ${isPalindrome(temp)}`);