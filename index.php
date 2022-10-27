<?php
require('vendor/autoload.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\FrontEndView@index');
Macaw::get('/test', 'App\TestView@index');
Macaw::get('/about', 'App\TestView@about');





Macaw::dispatch();