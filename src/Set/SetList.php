<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\Rector\Set;

use Rector\Set\Contract\SetListInterface;

final class SetList implements SetListInterface
{
    public const CONTAO = __DIR__.'/../../config/contao.php';
}
