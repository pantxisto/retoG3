#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push
send "pantxisto"
send "CtM5010"
