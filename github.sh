#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
printf 'pantxisto' | git push