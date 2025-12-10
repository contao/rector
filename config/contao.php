<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

use Contao\Rector\Node\ReturnTypeVisitor;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets(php81: true)
    ->withRules([
        Contao\Rector\Rector\SimplifyObjectOrNullCheckRector::class,
        Rector\CodeQuality\Rector\BooleanNot\SimplifyDeMorganBinaryRector::class,
        Rector\CodeQuality\Rector\Empty_\SimplifyEmptyCheckOnEmptyArrayRector::class,
        Rector\CodeQuality\Rector\FunctionLike\SimplifyUselessVariableRector::class,
        Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class,
        Rector\CodeQuality\Rector\If_\SimplifyIfReturnBoolRector::class,
        Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class,
        Rector\CodingStyle\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector::class,
        Rector\CodeQuality\Rector\FuncCall\CompactToVariablesRector::class,
        Rector\CodingStyle\Rector\FuncCall\CountArrayToEmptyArrayComparisonRector::class,
        Rector\CodingStyle\Rector\Stmt\RemoveUselessAliasInUseStatementRector::class,
        Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodParameterRector::class,
        Rector\DeadCode\Rector\Concat\RemoveConcatAutocastRector::class,
        Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector::class,
        Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector::class,
        Rector\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector::class,
    ])
    ->registerDecoratingNodeVisitor(ReturnTypeVisitor::class)
;
