#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
sleep 2s | printf 'pantxisto' | git push