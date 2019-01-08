#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
git push | sleep 2s | printf 'pantxisto'