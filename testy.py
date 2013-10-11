#!C:/Python27/python.exe
# -*- coding: utf-8 -*-

#-------------------------------------------------------------------------------
# Name:        module1
# Purpose:
#
# Author:      Liska_P
#
# Created:     08.10.2013
# Copyright:   (c) Liska_P 2013
# Licence:     <your licence>
#-------------------------------------------------------------------------------

import sys
import json
import datetime
import time

try:
    data = (sys.argv[1])[1:-1].split(',')   #prvni parametr bez prvniho a posledniho znaku rozdelim na list
except:
    print 'ERROR 1'
    sys.exit(1)

filename = sys.argv[2]

ID = 0

for test in data:
    t=datetime.datetime.now()
    s= str(ID)+ ' ' + test + ' ' + str(t.hour)+' hodin, '+ str(t.minute)+' minut a '+ str(t.second)+' vteřin'
    try:
        f = open(filename, 'a')
        f.write(s+'\n')
        f.close()
        ID = ID + 1
        time.sleep(1)
    except:
        print 'ERROR 2'
        sys.exit(2)


for test in data:
    t=datetime.datetime.now()
    s= str(ID)+ ' ' + test + ' ' + str(t.hour)+' hodin, '+ str(t.minute)+' minut a '+ str(t.second)+' vteřin'
    try:
        f = open(filename, 'a')
        f.write(s+'\n')
        f.close()
        ID = ID + 1
        time.sleep(1)
    except:
        print 'ERROR 2'
        sys.exit(2)


# Send it to stdout (to PHP)
print json.dumps(data)