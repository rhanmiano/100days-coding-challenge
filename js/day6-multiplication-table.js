/**
 * 100 Days Coding Challenge
 * 
 * @author Rhan Miano
 * @since November 6, 2018
 * 
 * Pushing myself to do this 100 Days Coding Challenge.
 */

// Day 6 Multiplication Table
//   Write a probram that prints a multiplication table for numbers up to 12.

let table = '';
for(let i=1; i<13; i++){
  let product = 0;

  for(let j=1; j<13; j++){
    product = i * j;

    table += product + '\t';
  }

  table += '\n';
}

console.log(table);