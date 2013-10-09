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

seznam = []

try:
    filename = sys.argv[1]
    f = open(filename, 'r')
except:
    print "Error Delete_file"
    sys.exit(4)

for line in f:
        seznam.append(line)

print json.dumps(seznam)
