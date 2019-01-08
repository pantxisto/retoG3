#!/bin/bash
printf "jon" | github.sh
git add .
fecha=`date`
git commit -m "commit $fecha"
echo "Introduce tu nombre"
read prueba

echo "pantxisto"
# echo "pantxisto" | git push