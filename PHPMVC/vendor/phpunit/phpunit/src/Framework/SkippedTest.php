<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please View the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedTest extends Throwable
{
}
