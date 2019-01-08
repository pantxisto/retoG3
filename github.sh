#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
echo 'pantxisto' | sleep 3s | git push