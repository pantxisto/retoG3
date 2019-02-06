#!/bin/bash
echo -n "¿Iniciar lammp? s/n: "
read respuesta
if [[ $respuesta = "s" ]]
then
        sudo /opt/lampp/lampp start 
fi
/usr/bin/firefox -new-window localhost/retoG3/public
exit
