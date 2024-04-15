<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please View the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Manifest;

class RequiresElement extends ManifestElement {
    public function getPHPElement(): PhpElement {
        return new PhpElement(
            $this->getChildByName('php')
        );
    }
}
