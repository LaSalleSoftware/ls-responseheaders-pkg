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
 * @see        https://github.com/LaSalleSoftware/ls-responseheaders-pkg
 */

namespace Lasallesoftware\Responseheaders;

// Laravel Framework
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;


class ResponseheadersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * "So, what if we need to register a view composer within our service provider?
     * This should be done within the boot method. This method is called after all other service providers
     * have been registered, meaning you have access to all other services that have been registered by the framework"
     * (https://laravel.com/docs/5.6/providers)
     */
    public function boot()
    {
        $this->app->make(Kernel::class)->prependMiddlewareToGroup('web', DisableFloc::class);

        $this->app->make(Kernel::class)->prependMiddlewareToGroup('web', OtherHeaders::class);
    }
}