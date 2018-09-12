<?php

return [
  'database' => [
    'name' => 'BD_NAME',
    'connection' => 'mysql:host=localhost',
    'username' => 'MY_USERNAME',
    'password' => 'MY_SECRET_PASSWORD',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];