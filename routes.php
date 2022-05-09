<?php


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about',);
$router->get('contact', 'PagesController@contact');
$router->post('submit-new-task', 'TasksController@store');
