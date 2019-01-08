#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push
printf 'pantxisto" | ./script