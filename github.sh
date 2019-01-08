#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
echo "Introduce tu nombre"
echo -e 'jon' | read prueba
echo "prueba $prueba"
sleep 3s

echo "pantxisto"
# echo "pantxisto" | git push