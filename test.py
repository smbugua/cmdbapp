import csv
f = open('csvfile.csv','w')
f.write('hi there\n') #Give your csv text here.
## Python will convert \n to os.linesep
f.close()