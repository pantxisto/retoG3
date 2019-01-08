#!/bin/bash
git add .
fecha=`date`
git commit -m "commit $fecha"
echo "Introduce tu nombre"
read prueba | echo "jon"
echo "pantxisto"
# echo "pantxisto" | git push