/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 8 - FizzBuzz Challenge
// Create a program that replicates the famous game Fizz Buzz. The program will take an input, 
// e.g. 20, and then print out the list of Fizz Buzz up to and including that number, where:
//
//   Any multiple of 3 is replaced by the word ‘Fizz’
//   Any multiple of 5 is replaced by the word ‘Buzz’
//   Any multiple of both 3 and 5 is replaced by the word ‘FizzBuzz’

function fizzBuzzChallenge($arg){
  for(var i=0; i<=$arg; i++){
    if(i%15 == 0){
      console.log("FizzBuzz");
    } else if(i%3 == 0){
      console.log("Fizz");
    } else if(i%6 == 0){
      console.log("Buzz");
    } else {
      console.log(i);
    }
  }  
}

fizzBuzzChallenge(30);