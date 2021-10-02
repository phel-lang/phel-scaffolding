<?php

declare(strict_types=1);

return [
    'src-dirs' => ['src'],
    'test-dirs' => ['tests'],
    'vendor-dir' => 'vendor',
    'export' => [
        'directories' => ['src/phel'],
        'namespace-prefix' => 'PhelGenerated',
        'target-directory' => 'src/PhelGenerated',
    ],
];
