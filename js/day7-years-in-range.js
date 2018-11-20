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
let date        = new Date(),
    curYear     = date.getFullYear(),
    startYear   = 1990;

let yearsInRange = function(startYear, curYear){
  let years = {
    count: 0,
    list: []
  };

  for(let i=startYear; i<=curYear; i++){
    let strTemp = i.toString(),
        arrTemp = [];

    for(let j=0; j<=strTemp.length-1; j++){
      let char = strTemp.substr(j, 1);
      
      arrTemp.push(char);
    }

    if(hasRepeatingNums(arrTemp)){
      years.count = years.count + 1;
      years.list.push(i);
    }
  }

  return years;
}

let hasRepeatingNums = function(args){
  let arrNums = args;

  arrNums.sort(function(a,b){
    return a - b;
  });

  for(let i=0; i<=arrNums.length-1; i++){
    if(arrNums[i] === arrNums[i-1]){
      return true;
      break;
    }
  }
}

console.log(yearsInRange(startYear, curYear));