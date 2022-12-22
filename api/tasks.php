<?php
// leggo il contenuto del file e lo salvo sotto forma di stringa in una variabile
$tasks = file_get_contents("../tasks.json");

// converto la stringa $tasks in un array. 
// Il secondo argomento "true" indica che vogliamo avere un array associativo
$tasksarray = json_decode($tasks, true);

// Impostare il header per indicare al browser che il contenuto è in formato JSON
header("Content-Type: application/json");

// Converte l'array in json e lo stampa sulla pagina
echo json_encode($tasksarray);
// echo $tasks;