<?php

try {
    $insert = App::get('database')->insert('todos', [
        'description' => $_POST['description'],
        'completed' => 0
    ]);
} catch (Exception $e) {
    return $e->getMessage();
}

header("Location: /");
