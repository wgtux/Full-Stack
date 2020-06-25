<?php
require 'vendor/autoload.php';

use classes\matematica\Basica;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('erro.log', Logger::WARNING));

$m = new Basica();
echo $m->somar(10,15);

// add records to the log
$log->warning('Foo');
$log->error('Bar');