<?php

try {
    $tasks = App::get('database')->selectAll('todos');
} catch (Exception $e) {
    return $e->getMessage();
}


require 'views/index.view.php';

