<?php
//son grupos de tipos de datos
//contiene un grupo de datos

$names = [
    'Luis',
    'Susan',
    'Domenica',
    'Chelsea',
];

$ages = [
    22,
    32,
    25,
    21,
];


echo "Nombre: $names[0] <br> Edad: $ages[0]";

echo '<br>';
// var_dump($names);
echo '<br>';
// var_dump($ages);

echo '<br>';

//anidar arrays dentro de arrays 0 arreglo asociativo
 $players = [
    [
        'name' => 'Chilavert',
        'age' => 62,
        'country' => 'Paraguay',
        'position' => 'goalkeeper',
    ],
    [
        'name' => 'Tavarelli',
        'age' => 35,
        'country' => 'Paraguay',
        'position' => 'Defensor',
    ],
 ];

  echo $players[1]['country'];
  echo '<br>';
//  var_dump($players);

