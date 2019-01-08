#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
echo "Introduce tu nombre"
printf "jon" | read prueba
sleep 3s
echo $prueba
echo "pantxisto"
# echo "pantxisto" | git push