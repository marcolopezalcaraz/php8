<?php
//Estructura if/else
$taskCompleted = true;

// Condicion a cumplir si la tarea esta completada..
if ($taskCompleted) {
    echo 'Tarea completada con exito';
} else {
    echo 'La tarea no se ha completado';
}
echo '<br><br>';

//ejemplo con precio
$price = 10;
//si el precio es menor a la variable. Comprar.
if ($price <= 10) {
    echo 'Comprar!';
} else {
    echo 'No comprar! :(';
}
echo '<br>';

$hacerTarea = true;
$limpiezaPieza = false;

if ($hacerTarea || $limpiezaPieza) {
    echo 'Tareas Ok!!';
} else {
    echo 'No se ha Hecho';
}
 
echo '<hr>';

//Estructura elseif que se puede mejorar con un Metodo Switch
$DiaSemana = 2;

if ($DiaSemana == 1) {
    echo 'Lunes';
}elseif ($DiaSemana == 2) {
    echo 'Martes';
}elseif ($DiaSemana == 3) {
    echo 'Miercoles';
}

echo '<hr>';

$name = 'Marco';
$edad1 = 18;
$edad2 = 64;
$edadUser = 32;

if ($edadUser >= $edad1 && $edadUser <= $edad2) {
    echo "$name Esta en edad de trabajar";
}else {
    echo "$name No esta en edad de trabajar";
}

echo '<hr>';

//condicional SWITCH
//
$semanaSwitch = 1;
$mes = 'diciembre';


switch ($semanaSwitch) {
    case '1':
        echo 'Lunes';
        break;
    case '2':
        echo 'Martes';
        break;
    case '3':
        echo 'Miercoles';
        break;
    case '4':
        echo 'Jueves';
        break;
    case '5':
        echo 'Viernes';
        break;
    default:
        echo 'No es ningun dia ni tampoco mes';
        break;
}
echo '<hr>';

//ejemplo con operadores logicos
$name = 'Marco';
$edad1 = 18;
$edad2 = 64;
$edadUser = 0;

switch (true) {
   
    case ($edadUser >=18) && ($edadUser <=64):
        echo 'puede trabajar';
        break;
    case ($edadUser <18) && ($edadUser >=1):
        echo 'es menor de edad';
        break;
        case ($edadUser == 0):
            echo 'Ingrese un valor mayor a 0';
            break;
    default:
        echo 'no puede trabajar, ya se debe jubilar';
        break;
}