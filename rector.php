<?php

use Rector\Config\RectorConfig;
use Rector\Php84\Rector\Param\ExplicitNullableParamTypeRector;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPhpVersion(PhpVersion::PHP_84)
    ->withRules([
        ExplicitNullableParamTypeRector::class,
    ])
    ->withPaths([
        __DIR__ . '/src',
    ]);
