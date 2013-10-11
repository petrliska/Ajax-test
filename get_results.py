#!C:/Python27/python.exe
# -*- coding: utf-8 -*-

#-------------------------------------------------------------------------------
# Name:        module1
# Purpose:
#
# Author:      Liska_P
#
# Created:     09.10.2013
# Copyright:   (c) Liska_P 2013
# Licence:     <your licence>
#-------------------------------------------------------------------------------

import sys
import json

slovnik = dict()

try:
    lastID = int(sys.argv[2])
    filename = sys.argv[1]
    f = open(filename, 'r')
except:
    print "Error Get_result"
    sys.exit(4)

for line in f:
        words = line.split()
        ID = int(words[0])
        if (ID>lastID):
            line2 = " ".join(words[1:])
            slovnik[ID] = line2
f.close()

print json.dumps(slovnik)
print ID

