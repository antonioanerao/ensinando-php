<?php


$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php',);
$router->get('contact', 'controllers/contact.php');
$router->post('submit-new-task', 'controllers/submit-new-task.php');
