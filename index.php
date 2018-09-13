<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

require Router::load('routes.php')
        ->getControllerByUri(Request::uri(), Request::method());