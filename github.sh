#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push
#!/usr/local/bin/expect -f
expect "Username for 'https://github.com':"
send "pantxisto"
send "CtM5010"
