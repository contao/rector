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
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(SetList::PHP_80);
    $rectorConfig->import(SetList::PHP_81);

    $rectorConfig->rule(Rector\CodingStyle\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector::class);
    $rectorConfig->rule(Rector\CodeQuality\Rector\FuncCall\CompactToVariablesRector::class);
    $rectorConfig->rule(Rector\CodingStyle\Rector\FuncCall\CountArrayToEmptyArrayComparisonRector::class);
    $rectorConfig->rule(Rector\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector::class);
    $rectorConfig->rule(Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector::class);
    $rectorConfig->rule(Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector::class);
    $rectorConfig->rule(Rector\DeadCode\Rector\Concat\RemoveConcatAutocastRector::class);
    $rectorConfig->rule(Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodParameterRector::class);
    $rectorConfig->rule(Rector\CodingStyle\Rector\Stmt\RemoveUselessAliasInUseStatementRector::class);
    $rectorConfig->rule(Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector::class);
    $rectorConfig->rule(Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector::class);
    $rectorConfig->rule(Rector\CodeQuality\Rector\BooleanNot\SimplifyDeMorganBinaryRector::class);
    $rectorConfig->rule(Rector\CodeQuality\Rector\Empty_\SimplifyEmptyCheckOnEmptyArrayRector::class);
    $rectorConfig->rule(Rector\CodeQuality\Rector\If_\SimplifyIfReturnBoolRector::class);
    $rectorConfig->rule(Rector\CodingStyle\Rector\String_\SymplifyQuoteEscapeRector::class);
    $rectorConfig->rule(Rector\CodeQuality\Rector\FunctionLike\SimplifyUselessVariableRector::class);

    // Contao
    $rectorConfig->rule(Contao\Rector\SimplifyObjectOrNullCheckRector::class);

    $rectorConfig->phpstanConfig(__DIR__.'/phpstan.neon');
};
