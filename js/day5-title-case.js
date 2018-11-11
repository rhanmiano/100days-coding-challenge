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
 * and if the char before it is a space ' ', if so make the
 * char uppercase if it's in lowercase, otherwise for any other
 * chars make it lowercase if it's in uppercase. Append each
 * char to strOutput.
 */
let titleCase = function (args){
  try{
    let strOutput = '';
    
    for(var i=0; i<=args.length -1; i++){
      var char = args.substr(i, 1);
      if(args.substr(i-1, 1) == ' ' || i == 0){
        if(char == char.toLowerCase()){
          char = char.toUpperCase();
        }
      } else {
        if(char == char.toUpperCase()){
          char = char.toLowerCase();
        }
      }
      strOutput += char;
    }

    return strOutput;
  } catch(err){
    return `${err.name}: Given param is not a string.`;
  }  
}

console.log(titleCase("the day you sAid gOodnIghT"));