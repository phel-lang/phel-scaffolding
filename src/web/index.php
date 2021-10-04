<?php

declare(strict_types=1);

use Gacela\Framework\Gacela;
use Phel\Run\RunFacade;

$projectRootDir = dirname(__DIR__, 2) . '/';

require $projectRootDir . 'vendor/autoload.php';

Gacela::bootstrap($projectRootDir, [
    'config' => [
        'path' => 'phel-config.php',
    ],
]);

$runFacade = new RunFacade();
$runFacade->runNamespace('phel-scaffolding\web\views\main');
