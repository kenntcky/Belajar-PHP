<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please View the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestWarningHook extends TestHook
{
    public function executeAfterTestWarning(string $test, string $message, float $time): void;
}
