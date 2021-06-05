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
 * @copyright  (c) 2021 The South LaSalle Trading Corporation
 * @license    http://opensource.org/licenses/MIT
 * @author     Bob Bloom
 * @email      bob.bloom@lasallesoftware.ca
 *
 * @see        https://lasallesoftware.ca
 * @see        https://packagist.org/packages/lasallesoftware/ls-responseheaders-pkg
 * @see        https://github.com/LaSalleSoftware/ls-libraryfrontend-pkg
 */

namespace Lasallesoftware\Responseheaders;

// Laravel Framework
use Illuminate\Http\Response;

use Closure;

class DisableFloc
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            if (! $response->headers->has('Permissions-Policy')) {
                $response->header('Permissions-Policy', 'interest-cohort=()');
            }
        }

        return $response;
    }
}