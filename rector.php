<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withSets([__DIR__.'/config/contao.php'])
    ->withPaths([
        __DIR__.'/config',
        __DIR__.'/src',
        __DIR__.'/ecs.php',
        __DIR__.'/rector.php',
    ])
    ->withParallel()
    ->withCache(sys_get_temp_dir().'/rector_rector_cache')
;
