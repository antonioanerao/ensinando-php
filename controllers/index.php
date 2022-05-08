<?php


//$insert = $app['database']->insert('todos', ['description', 'completed'], ['new task', 0]);

$tasks = $app['database']->selectAll('todos');


require 'views/index.view.php';

