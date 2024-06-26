<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please View the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

final class NullType extends Type
{
    public function isAssignable(Type $other): bool
    {
        return !($other instanceof VoidType);
    }

    public function name(): string
    {
        return 'null';
    }

    public function asString(): string
    {
        return 'null';
    }

    /**
     * @deprecated
     *
     * @codeCoverageIgnore
     */
    public function getReturnTypeDeclaration(): string
    {
        return '';
    }

    public function allowsNull(): bool
    {
        return true;
    }
}
