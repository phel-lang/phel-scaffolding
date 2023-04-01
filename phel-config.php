<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;
use Phel\Config\PhelExportConfig;

return (new PhelConfig())
    ->setSrcDirs(['src'])
    ->setTestDirs(['tests'])
    ->setOutDir('out')
    ->setFormatDirs(['src', 'tests'])
    ->setExport((new PhelExportConfig())
        ->setDirectories(['src/modules'])
        ->setNamespacePrefix('PhelGenerated')
        ->setTargetDirectory('src/PhelGenerated'))
    ->setIgnoreWhenBuilding(['src/local.phel'])
    ->setKeepGeneratedTempFiles(false);
