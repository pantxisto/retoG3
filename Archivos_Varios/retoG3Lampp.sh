#!/bin/bash
echo -n "¿Iniciar apache? s/n: "
read respuesta
if [[ $respuesta = "s" ]]
then
        sudo service apache2 start 
fi
sudo service apache2 restart
/usr/bin/google-chrome localhost/retoG3/public
exit
