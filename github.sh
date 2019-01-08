#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push
sleep 4s
echo "pantxisto"

