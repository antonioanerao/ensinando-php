<?php

return [
    'database' => [
        'name' => 'wordpress',
        'username' => 'wordpress',
        'password' => 'wordpress',
        'connection' => 'mysql:host=172.19.0.2',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];