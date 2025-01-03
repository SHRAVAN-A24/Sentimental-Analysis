import sys


t = sys.argv[1]

y = t.replace('_',' ')

from textblob import TextBlob

ed = TextBlob(y)

x = ed.sentiment.polarity
if x<0:
    print("Negative")
elif x==0:
    print("Neutral")
elif x>0:
    print("Positive")
   





