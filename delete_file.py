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
import os

try:
    filename = sys.argv[1]
    os.remove(filename)
except:
    print "Error Delete_file"