<?php
$nombre = 'Marco';

//las variables no necesitan comillas a menos que necesitan concatenar
echo $nombre;
echo '<br>';


//las constantes se definen de la siguiente forma. . 
// primero se agrega el nombre y luego el valor separado por , (coma)
define('PI', 3.14);

//las constantes tampocos necesitan comillas para echo
echo PI;