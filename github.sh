#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push
echo "pantxisto" | ./github.sh
send "CtM5010"
