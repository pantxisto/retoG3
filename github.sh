#!/bin/bash
( echo "pantxisto" ; echo "CtM5010" ) | github.sh
git add .
fecha=`date`
git commit -m "commit $fecha"
git push