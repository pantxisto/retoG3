#!/bin/bash
echo -n "¿Hacer git pull? s/n: "
read respuesta
if [[ $respuesta = "s" ]]
then
    git pull
fi
git add .
fecha=`date`
git commit -m "commit $fecha"
git push