<?php

declare(strict_types=1);

use Phel\Run\RunFacade;

require dirname(__DIR__) . '/../vendor/autoload.php';

$runFacade = new RunFacade();
$runFacade->runNamespace('phel-scaffolding\web\views\main');
