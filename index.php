<?php
$tasks =  file_get_contents("tasks.json");
$tasksarray = json_decode($tasks, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP - To Do List</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="blue">

    <div id="app">
        <h1>To Do List</h1>
        <div class="container mar-auto white small pad">
            <ul>
                <!-- IL TASKS IN QUESTIONE VIENE DAL JS RIGA 7 -->
                <li v-for="task in tasks">{{task.testo}}</li>
            </ul>
        </div>
        <div class="container d-flex justify-content-between mar-auto mt-2 py-2 px-0 small">
            <input class="white p-2" type="text" name="" id="" placeholder="Inserisci elemento...">
            <button class="blue">Inserisci</button>
        </div>
    </div>

    <!-- javascript -->
    <script src="js/main.js"></script>
</body>

</html>