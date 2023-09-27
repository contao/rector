<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

use Contao\Rector\SimplifyObjectOrNullCheckRector;
use Rector\CodeQuality\Rector\BooleanNot\SimplifyDeMorganBinaryRector;
use Rector\CodeQuality\Rector\Empty_\SimplifyEmptyCheckOnEmptyArrayRector;
use Rector\CodeQuality\Rector\FuncCall\CompactToVariablesRector;
use Rector\CodeQuality\Rector\FunctionLike\SimplifyUselessVariableRector;
use Rector\CodeQuality\Rector\Identical\SimplifyBoolIdenticalTrueRector;
use Rector\CodeQuality\Rector\If_\SimplifyIfReturnBoolRector;
use Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector;
use Rector\CodingStyle\Rector\FuncCall\CountArrayToEmptyArrayComparisonRector;
use Rector\CodingStyle\Rector\String_\SymplifyQuoteEscapeRector;
use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\ClassMethod\RemoveUnusedPrivateMethodParameterRector;
use Rector\DeadCode\Rector\Concat\RemoveConcatAutocastRector;
use Rector\Php73\Rector\FuncCall\JsonThrowOnErrorRector;
use Rector\Php74\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector;
use Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector;
use Rector\Set\ValueObject\SetList;
use Rector\Strict\Rector\Empty_\DisallowedEmptyRuleFixerRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(SetList::PHP_80);
    $rectorConfig->import(SetList::PHP_81);

    $rectorConfig->rule(ArraySpreadInsteadOfArrayMergeRector::class);
    $rectorConfig->rule(CompactToVariablesRector::class);
    $rectorConfig->rule(CountArrayToEmptyArrayComparisonRector::class);
    $rectorConfig->rule(DisallowedEmptyRuleFixerRector::class);
    $rectorConfig->rule(JsonThrowOnErrorRector::class);
    $rectorConfig->rule(NewlineBeforeNewAssignSetRector::class);
    $rectorConfig->rule(RemoveConcatAutocastRector::class);
    $rectorConfig->rule(RemoveUnusedPrivateMethodParameterRector::class);
    $rectorConfig->rule(RestoreDefaultNullToNullableTypePropertyRector::class);
    $rectorConfig->rule(SimplifyBoolIdenticalTrueRector::class);
    $rectorConfig->rule(SimplifyDeMorganBinaryRector::class);
    $rectorConfig->rule(SimplifyEmptyCheckOnEmptyArrayRector::class);
    $rectorConfig->rule(SimplifyIfReturnBoolRector::class);
    $rectorConfig->rule(SimplifyObjectOrNullCheckRector::class);
    $rectorConfig->rule(SymplifyQuoteEscapeRector::class);
    $rectorConfig->rule(SimplifyUselessVariableRector::class);

    $rectorConfig->phpstanConfig(__DIR__.'/phpstan.neon');
};
