#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
echo "Introduce tu nombre"
printf "jon" | read prueba
echo "prueba $prueba"
sleep 3s

echo "pantxisto"
# echo "pantxisto" | git push