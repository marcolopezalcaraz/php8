<?php


//definiendo una funcion

function dd($value) {
   return die(var_dump($value));
}

//funciones para filtrar arrays
//declarar arrays siempre en plural ok?

$tasks = [
    [
        'title' => 'Estudiar PHP',
        'completed' => false,
    ],
    [
        'title' => 'Hacer Ejercicio',
        'completed' => true,
    ],
    [
        'title' => 'Ir al SuperMercado',
        'completed' => true,
    ],
    [
        'title' => 'Aprender Nagios',
        'completed' => false,
    ],
    [
        'title' => 'Aprender Git',
        'completed' => false,
    ],
    [
        'title' => 'Ir a la mierda',
        'completed' => true,
    ],
];

//////////////////////////
$completedTasks = array_filter($tasks, function($task){
    return $task['completed'];
});
$pendingTasks = array_filter($tasks, function($task){
    return !$task['completed'];
});
echo '<h1>Mis Tareas</h1>';
echo '<h2>Completas</h2>';



foreach ($completedTasks as $task) {
    echo $task['title'] . "✅" .  "<br>";
}
echo '<h2>Pendientes</h2>';
foreach ($pendingTasks as $task) {
    echo $task['title'] . "❌" .  "<br>";
}