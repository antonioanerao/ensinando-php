<?php

$insert = $app['database']->insert('todos', [
    'description' => $_POST['description'],
    'completed' => 0
]);

header("Location: /");
