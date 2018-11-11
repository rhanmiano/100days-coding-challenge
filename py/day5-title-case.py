##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 5 Title Case A Sentence
#   Return the provided string with the first letter of each word capitalized.
#   Make sure the rest of the word is in lower case.


# Initialize an empty string to handle the output.
# Loop through the provided string, and get each char
# by accessing its index. Check if the char is the
# first one in the string and if the char before it is
# a space ' ', if so make the char uppercase if it's in
# lowercase. For any other chars make it lowercase if
# it's in uppercase. Append each char to strOuput.
def titleCase(args):
  strOutput = '';
  
  for i in range(0, len(args)):
    char = args[i]
    if(args[i-1] == ' ' or i == 0):
      if(char == char.lower()):
        char = char.upper()
    else:
      if(char == char.upper()):
        char = char.lower()

    strOutput = strOutput + char

  return strOutput

print(titleCase("say sOmethinG i'm giVing Up on yoU"))