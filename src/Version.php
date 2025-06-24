<?php

/**
 * This file is part of the LaSalle Software Response Headers package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  (c) 2021 - 2025 The South LaSalle Trading Corporation
 * @license    http://opensource.org/licenses/MIT
 * @author     Bob Bloom
 * @email      bob.bloom@lasallesoftware.ca
 *
 * @see        https://lasallesoftware.ca
 * @see        https://packagist.org/packages/lasallesoftware/ls-responseheaders-pkg
 * @see        https://github.com/LaSalleSoftware/ls-responseheaders-pkg
 */

namespace Lasallesoftware\Responseheaders;

class Version
{
    /**
     * This package's version number.
     *
     * @var string
     */
    const VERSION = '1.2.0';

    /**
     * This package's release date.
     *
     * @var string
     */
    const RELEASEDATE = 'April 15, 2023';

    /**
     * This package's name.
     *
     * @var string
     */
    const PACKAGE = 'Response Header package for my LaSalle Software.';

    /**
     * Get the version number of this package.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    /**
     * Get the release date of this package.
     *
     * @return string
     */
    public function releasedate()
    {
        return static::RELEASEDATE;
    }

    /**
     * Get the name of this package.
     *
     * @return string
     */
    public function packageName()
    {
        return static::PACKAGE;
    }
}
