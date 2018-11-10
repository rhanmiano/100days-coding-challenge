##
 # 100 Days Coding Challenge
 # 
 # @author Rhan Miano
 # @since November 6, 2018
 # 
 # Pushing myself to do this 100 Days Coding Challenge.
##

# Day 2 Find the longest word in a string
#   Find the length of the longest word in the provided sentence. 
#   Your response should be the longest word and its length.

def getLongestString(args):
  arrWords = args.split(" ")  
  arrWords.sort(key=getLength)

  longestWord = arrWords[len(arrWords) - 1]

  # What if there are other words with equal lengths?
  arrWordsSameLength = []
  for word in arrWords:
    if(len(longestWord) == len(word)):
      arrWordsSameLength.append(word)
  
  if(len(arrWordsSameLength) > 0):
    print("Longest Words: {}".format(arrWordsSameLength))
    print("Length: {}".format(len(arrWordsSameLength[0])))
  else:
    print("Longest Word: {}".format(longestWord))
    print("Length: {}".format(len(longestWord[0])))

def getLength(args):
  return len(args)

getLongestString("hi how are you")