#!/usr/bin/env python
from schardet import detect 
import os,sys
SRC='webpage/'
for i in os.listdir(SRC):
    filename = SRC + i
    fileobject = open(filename, "r")
    content = fileobject.read();
    encoding = detect(content)
    if encoding:
        try:
            new_content = content.decode(encoding).encode('utf-8')
            fileobject = open(filename, 'w')
            fileobject.write(new_content)
            fileobject.flush()
            fileobject.close()
            print "done"
        except Exception,e:
            print(e)
            pass 
