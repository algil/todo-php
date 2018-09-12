<?php

$database = require 'bootstrap.php';
require 'Task.php';

$tasks = $database->selectAll('tasks', 'Task');


require 'index.view.php';