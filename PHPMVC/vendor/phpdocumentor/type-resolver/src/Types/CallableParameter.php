<?php
/**
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please View the LICENSE
 *  file that was distributed with this source code.
 *
 *  @link      http://phpdoc.org
 */

declare(strict_types=1);

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Type;

/**
 * Value Object representing a Callable parameters.
 *
 * @psalm-immutable
 */
final class CallableParameter
{
    /** @var Type */
    private $type;

    /** @var bool */
    private $isReference;

    /** @var bool */
    private $isVariadic;

    /** @var bool */
    private $isOptional;

    /** @var string|null */
    private $name;

    public function __construct(
        Type $type,
        ?string $name = null,
        bool $isReference = false,
        bool $isVariadic = false,
        bool $isOptional = false
    ) {
        $this->type = $type;
        $this->isReference = $isReference;
        $this->isVariadic = $isVariadic;
        $this->isOptional = $isOptional;
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function isReference(): bool
    {
        return $this->isReference;
    }

    public function isVariadic(): bool
    {
        return $this->isVariadic;
    }

    public function isOptional(): bool
    {
        return $this->isOptional;
    }
}
