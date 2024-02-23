<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withSets([__DIR__.'/vendor/contao/easy-coding-standard/config/contao.php'])
    ->withSkip([
        ReferenceUsedNamesOnlySniff::class => [
            'config/contao.php',
        ],
    ])
    ->withConfiguredRule(HeaderCommentFixer::class, [
        'header' => "This file is part of Contao.\n\n(c) Leo Feyer\n\n@license LGPL-3.0-or-later",
    ])
    ->withParallel()
    ->withCache(sys_get_temp_dir().'/rector_ecs_cache')
;
