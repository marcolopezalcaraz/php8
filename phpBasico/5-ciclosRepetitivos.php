<?php

echo '<h1>Ciclo For</h1>';
$names = [
    'Ile',
    'Marco',
    'Jose',
    'Pedro',
    'Lucy',
    'Mariana',
];

for ($i=0; $i < 4 ; $i++) { 
    echo $i . " - " . $names[$i] . "<hr>";
}
echo '<br>';

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
echo '<h1>Ciclo ForEach</h1>';
foreach ($players as $value) {
    echo "Nombres: " . $value['name'] . "<br>" . 
    "Edad: " . $value['age'] . "<br>" . 
    "Pais: " . $value['country'] . "<br>" . 
    "Posicion: " . $value['position'] . "<br><hr>";
}


echo '<br>';
// la variable $key se puede borrar si no va ser utilizada
echo '<strong>Se recomienda siempre usar el ForEach. <br>
    ya que el For hay que modificar el contador en el codigo para <br>
    que recorra todo el array</strong>';