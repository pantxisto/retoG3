#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push
expect "Username for 'https://github.com':"
send "pantxisto"
send "CtM5010"
