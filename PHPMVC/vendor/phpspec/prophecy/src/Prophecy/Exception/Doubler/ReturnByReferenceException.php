<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please View the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\Exception\Doubler;

class ReturnByReferenceException extends DoubleException
{
    private $classname;
    private $methodName;

    /**
     * @param string $message
     * @param string $classname
     * @param string $methodName
     */
    public function __construct($message, $classname, $methodName)
    {
        parent::__construct($message);

        $this->classname  = $classname;
        $this->methodName = $methodName;
    }

    /**
     * @return string
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }
}
