<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer\Test\Mock;

use Composer\Package\Version\VersionGuesser;

class VersionGuesserMock extends VersionGuesser
{
    public function __construct()
    {
    }

    public function guessVersion(array $packageConfig, $path)
    {
        return null;
    }

    public function getDefaultBranchName($path)
    {
        return null;
    }

}