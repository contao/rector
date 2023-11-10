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
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__.'/vendor/contao/easy-coding-standard/config/contao.php']);
    $ecsConfig->parallel();

    $ecsConfig->ruleWithConfiguration(HeaderCommentFixer::class, [
        'header' => "This file is part of Contao.\n\n(c) Leo Feyer\n\n@license LGPL-3.0-or-later",
    ]);

    $ecsConfig->cacheDirectory(sys_get_temp_dir().'/rector_ecs_cache');
};
