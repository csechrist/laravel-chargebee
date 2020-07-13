<?php

namespace Csechrist\LaravelChargebee;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Csechrist\LaravelChargebee\Skeleton\SkeletonClass
 */
class LaravelChargebeeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-chargebee';
    }
}
